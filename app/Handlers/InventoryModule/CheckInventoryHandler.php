<?php
namespace App\Handlers\InventoryModule;


use App\DAO\InventoryDAO;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;

class CheckInventoryHandler extends BaseHandler
{
	
	private $emptyInventoryFlag = false;


    protected function handle()
    {

        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $inventoryDAO = new InventoryDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $items = $inventoryDAO->findBy(['federation_owned' => true,'status'=> 1]);
                    $response[] = [];

                    if (isset($items))
                        $this->emptyInventoryFlag = true;

                    if(!$this->emptyInventoryFlag){
                        $this->addError(Lang::trans('message.api.inventory.not.found'));
                    }
                    $response = $this->setResponseData($items);
                    if (!empty($response))
                        $this->setData($response);
                    else
                        $this->setEmptyData();

                }
                else
                    $this->addError(Lang::trans('message.api.profile.error.not.found'));
            }
            else
                $this->addError(Lang::trans('message.api.profile.error.user'));

        }
        else
            $this->addError(Lang::trans('message.api.auth.error'));
    }

    /**
	 * Returns an array with the response 
	 * @return array
     * @param $items
	 */
    private function setResponseData($items){
    	

    	 $itemGroup = [];
		
    	 if ($this->emptyInventoryFlag){

    	     $collection = $items->map(function ($item) {
				return $values[] = [

				    'id' => $item->id,
					'name' => $item->name,
					'code' => $item->code,
					'brand' => $item->brand,
					'details' => $item->details,
					'quantity' => $item->quantity,
                    'type' => $item->type,
					'owned_by' =>$item->owner_user->email,
					'asigned_to' => $item->asigner_user->email,
					'created_by' => $item->owner_user->email,
					'updated_by' => $item->owner_user->email,
					'updated_at' => $item->updated_at->format("d-m-Y"),
					'created_at' => $item->created_at->format("d-m-Y")
				];
			});
             $itemGroup = $collection->toArray();
		 }
		 $response =['items' => $itemGroup];
    	 return $response;
    	 
	}
	
	 /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
       return [];
    }

}

