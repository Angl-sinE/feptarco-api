<?php
namespace App\Handlers\InventoryModule;

use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\InventoryDAO;
use App\Services\CheckAuthService;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class UpdateInventoryHandler extends BaseHandler
{

    /**
     * Executes the inventory update for each type
     */
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();


        if (isset($user)) {
            $userDao = new UserDAO();
            $checkedUser = $userDao->findOneBy(['email' => $user->email]);

            if (isset($checkedUser)) {
                DB::beginTransaction();

                $inventoryDAO = new InventoryDAO();
                $adminDAO = new AdminProfileDAO();
                $inventory = $inventoryDAO->findOneBy(['id' => $this->parameters['id']]);
                // Checks if the item  exsits
                if(isset($inventory)){
                    $creator_id = $inventory->created_by;
                    // checks if the item is owned by the federation
                    if(!$inventory->federation_owned){
                        // checks if the creator is in session
                        if ($creator_id === $checkedUser->id){
                            $inventoryDAO->update($inventory, $this->request);
                            DB::commit();
                        }
                        else
                            $this->addError(Lang::trans('message.api.gear.update.invalid.user'));
                        DB::rollback();
                    }
                    else {
                        // if the item belongs to the federation, the profile of the user in session is verified
                        $adminProfile = $adminDAO->findOneBy(['user_id' => $checkedUser->id]);
                        if(isset($adminProfile)){

                            $inventoryDAO->update($inventory, $this->request);
                            DB::commit();
                        }
                        else{
                            $this->addError(Lang::trans('message.api.gear.update.federation.owned'));
                            DB::rollback();
                        }
                    }

                }
                else {
                    $this->addError(Lang::trans('message.api.gear.update.not.found'));
                    DB::rollback();
                }
            }
            else
                $this->addError(Lang::trans('message.api.auth.error'));
        }
        else
            $this->addError(Lang::trans('message.api.auth.error'));
    }

    /**
     * Returns the validation array depending on the role
     * @return array|mixed
     **/
    public function validationRules()
    {
        return [
            'name' => 'string',
            'code' => 'string',
            'brand' => 'string',
            'details' => 'string',
            'quantity' => 'integer',
            'asigned_to' => 'integer'
        ];
    }
}
