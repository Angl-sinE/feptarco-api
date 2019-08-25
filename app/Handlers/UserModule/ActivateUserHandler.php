<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 17/03/2019
 * Time: 09:23
 */

namespace App\Handlers\UserModule;
use App\Handlers\BaseHandler;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class ActivateUserHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $user = $userDAO->findOneBy(['id' => $this->parameters['id']]);
                    if (isset($user)){
                        $userDAO->update($user,['active' => 1]);
                        DB::commit();
                    }
                    else
                        $this->addError(Lang::trans('message.api.user.delete.find.error'));
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

    public function validationRules()
    {
        return [];
    }


}
