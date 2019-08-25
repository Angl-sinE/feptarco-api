<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 13/10/2018
 * Time: 0:47
 */

namespace App\Handlers\UserModule;

use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use Illuminate\Support\Facades\Lang;



class UserHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    // Finds all users , status 1 for current users
                    $users = $userDAO->findBy(['status' => 1]);
                    if (!isset($users)){
                        $this->addError(Lang::trans('message.api.athletes.error'));
                    }
                    $response = $this->setResponseData($users);
                    $this->setData($response);
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
     * Formats the array response data
     * @param $users
     * @return array
     */
    private function setResponseData($users)
    {
        $response = [];
        // checks if the collection is not empty //
        if (!$users->isEmpty()) {

            $usersCollection = $users->map(function ($item) {
                $profile = '';
              if (isset($item->archerProfile))
                  $profile = 'Arquero';

              if (isset($item->adminProfile))
                  $profile = 'Administrador';

              if (isset($item->judgeProfile))
                  $profile = 'Juez';

              if (isset($item->trainerProfile))
                  $profile = 'Entrenador';

               return $userValues[] = [
                'id' => $item->id,
                'feptarco_id' => $item->feptarco_id,
                'email' => $item->email,
                'active' => $item->active,
                'avatar' => $item->avatar,
                'created_at' => $item->created_at->format("d-m-Y h:i:s"),
                'updated_at' => $item->updated_at->format("d-m-Y h:i:s"),
                'created_by' => $this->getUserEmail($item->created_by),
                'updated_by' =>  $this->getUserEmail($item->updated_by),
                'type' => $profile
            ];
        });
        $usersCollection = $usersCollection->filter(function($item) {
          return $item['feptarco_id'] != 'superadmin-1' && $item['feptarco_id'] != 'superadmin-2' && $item['feptarco_id'] != 'superadmin-3';
        })->values()->all();
        $response = $usersCollection;
        }
        return $response;
    }

    /**
     * Returns the user email
     * @param $userId
     * @return mixed
     */
    private function getUserEmail($userId) {
        $user = \App\Model\User::where('id', $userId)->get()->first();
        return $user->email;
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
