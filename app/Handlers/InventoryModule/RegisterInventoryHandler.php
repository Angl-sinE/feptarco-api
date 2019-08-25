<?php
namespace App\Handlers\InventoryModule;


use App\DAO\ArcherProfileDAO;
use App\DAO\AdminProfileDAO;
use App\Handlers\BaseHandler;
use App\DAO\InventoryDAO;
use App\Model\AdminProfile;
use App\Model\Inventory;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

//TODO: El campo de code debe ser unico y autogenerado cuando no es proporcionado
class RegisterInventoryHandler extends BaseHandler
{
    private $archerProfileDAO;

    private $adminProfileDAO;

    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        DB::beginTransaction();
       // Checks if the user is in session //
        if(isset($user)){
            // calls function to register the user gear//
           $checkRegister = $this->registerGear($user['id']);
          
           if ($checkRegister){
               DB::commit();  
               $this->setData([]);          
           }
           else{
               DB::rollback();
               $this->addError(Lang::trans('message.api.gear.register.error'));
           }
        }
    }

     /**
     * Registers an item on the inventory
     * @param $userId
     * @throws \Exception
     * @return  boolean
     */
    private function registerGear($userId)
    {
        // instance the DAO classes
        $this->archerProfileDAO = new ArcherProfileDAO();
        $this->adminProfileDAO = new adminProfileDAO();
        // find the profile for the user_id
        $archerProfile = $this->archerProfileDAO->findOneBy(['user_id'=> $userId]);
        $adminProfile = $this->adminProfileDAO->findOneBy(['user_id' => $userId]);

        $inventory = new Inventory();
        $inventoryDAO = new InventoryDAO();
        $inventory->name = $this->request['name'];
        $inventory->code = $this->request['code'];
        $inventory->brand = isset($this->request['brand']) ? $this->request['brand']: null;
        $inventory->details = isset($this->request['details']) ? $this->request['details']: null;
        $inventory->quantity = $this->request['quantity'];
        $inventory->type = $this->request['type'];

        // if the checked profile is archer
        if (isset($archerProfile) && !isset($adminProfile)){
            $inventory->federation_owned = false;
            $inventory->owned_by =   $archerProfile->user_id;
            $inventory->asigned_to = $archerProfile->user_id;
            $inventory->created_by = $archerProfile->user_id;
            $inventory->updated_by = $archerProfile->user_id;
        }
        // If the checked profile is feptarco
        else if (isset($adminProfile) && !isset($archerProfile)){

            $inventory->federation_owned = true;
            $inventory->created_by = $adminProfile->user_id;
            $inventory->updated_by = $adminProfile->user_id;
            $inventory->owned_by = $adminProfile->user_id;

            if ($this->request['federation'] == AdminProfile::FEDERATION_OWNED){
                $inventory->asigned_to = $adminProfile->user_id;
            }
            else{
                // Finds the user the item is going to be assigned to
                $assignedArcherProfile = $this->archerProfileDAO->findOneBy(['user_id'=> $this->request['assigned_user']]);
                // If check is true then assigns gear to user
                if (isset($assignedArcherProfile)){
                   $inventory->asigned_to = $assignedArcherProfile->user_id;
                }
                else{
                    $this->addError(Lang::trans('message.api.profile.error.not.found'));
                    return false;
                }

            }

        }
        else
            return false;

        $inventoryDAO->create($inventory);
        return true;


    }

    /**
     * Returns the validation array depending on the role
     * @return array|mixed
     */
    public function validationRules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|string|unique:inventory',
            'brand' => 'string',
            'details' => 'string',
            'quantity' => 'required|integer',
            'type' => 'required|string',
            'federation' => 'required|integer',
            'assigned_user' => 'integer'
        ];
    }

}