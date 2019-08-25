<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 16/03/2019
 * Time: 18:43
 */

namespace App\Handlers\UserModule;


use App\DAO\JudgeProfileDAO;
use App\DAO\TrainerProfileDAO;
use App\Handlers\BaseHandler;
use App\DAO\AdminProfileDAO;
use App\DAO\UserDAO;
use App\DAO\ArcherProfileDAO;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class DeleteUserHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $archerProfileDAO = new ArcherProfileDAO();
            $judgeProfileDAO = new JudgeProfileDAO();
            $trainerProfileDAO = new TrainerProfileDAO();


            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $user = $userDAO->findOneBy(['id' => $this->parameters['id']]);
                    if (isset($user)){


                        $userDAO->update($user,['status' => 0]);
                        //dd($user);
                        // looks for the profile in the user
                        $adminProfile = $adminDAO->findOneBy(['user_id' => $user->id]);
                        $archerProfile = $archerProfileDAO->findOneBy(['user_id' => $user->id]);
                        $judgeProfile = $judgeProfileDAO->findOneBy(['user_id' => $user->id]);
                        $trainerProfile = $trainerProfileDAO->findOneBy(['user_id' => $user->id]);

                        if (isset($adminProfile)){
                            $adminDAO->update($adminProfile,['status' => 0]);
                        }
                        if (isset($archerProfile)){
                            $archerProfileDAO->update($archerProfile,['status' => 0]);
                        }
                        if (isset($judgeProfile)){
                            $judgeProfileDAO->update($archerProfile,['status' => 0]);
                        }
                        if (isset($trainerProfile)){
                            $trainerProfileDAO->update($archerProfile,['status' => 0]);
                        }
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
