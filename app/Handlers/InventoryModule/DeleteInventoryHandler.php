<?php
namespace App\Handlers\InventoryModule;

use App\DAO\AdminProfileDAO;
use App\DAO\UserDAO;
use App\DAO\InventoryDAO;
use App\DAO\ArcherProfileDAO;
use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class DeleteInventoryHandler extends BaseHandler
{


    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();

        if (isset($user)) {
            $userDao = new UserDAO();
            $checkedUser = $userDao->findOneBy(['email' => $user->email]);

            if (isset($checkedUser)) {
                DB::beginTransaction();
                $archerProfileDAO = new archerProfileDAO();
                $adminDAO = new AdminProfileDAO();

                $archerProfile = $archerProfileDAO->findOneBy(['user_id' => $checkedUser->id]);
                $inventoryDAO = new InventoryDAO();
                $inventory = $inventoryDAO->findOneBy(['id' => $this->parameters['id']]);

                // If user has archer profile then item is deleted only if it not federated //
                if (isset($archerProfile)){
                    if(!$inventory){
                        $this->addError(Lang::trans('message.api.gear.update.not.found'));
                        DB::rollBack();
                    }
                    $creator_id = $inventory->created_by;
                    // checks if the creator is the same user in session and if the item belongs to the federation //
                    if ($creator_id === $checkedUser->id){
                        if (!$inventory->federation_owned){
                            $inventoryDAO->delete($inventory);
                            DB::commit();
                        }
                    }
                    else{
                        $this->addError(Lang::trans('message.api.gear.delete.invalid.user'));
                    }
                }
                // Checks if user has the admin profile
                else{
                    $adminProfile = $adminDAO->findOneBy(['user_id' => $checkedUser->id]);
                    if (isset($adminProfile)){
                        if(!$inventory->federation_owned){
                            $this->addError(Lang::trans('message.api.gear.delete.invalid.user'));
                        }
                        // logically deletes the item from the inventory
                        $inventoryDAO->update($inventory, ['status' => 0]);
                        DB::commit();

                    }
                    else{
                        $this->addError(Lang::trans('message.api.inventory.profile.not.found'));
                    }
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
     */
    public function validationRules()
    {
        return [];
    }

}