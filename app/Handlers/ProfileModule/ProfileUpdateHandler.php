<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/10/2018
 * Time: 22:01
 */

namespace App\Handlers\ProfileModule;

use App\DAO\ArcherProfileDAO;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\JudgeProfileDAO;
use App\DAO\TrainerProfileDAO;
use App\Handlers\BaseHandler;
use App\Model\Role;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class ProfileUpdateHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();


        if (isset($user)) {
            DB::beginTransaction();
            $userDao = new UserDAO();
            $archerDAO = new ArcherProfileDAO();
            $adminDAO = new AdminProfileDAO();
            $trainerDAO = new TrainerProfileDAO();
            $judgeDAO = new JudgeProfileDAO();


            $checkedUser = $userDao->findOneBy(['email' => $user->email]);
            // Flag for the profile role
            $roleFlag = null;
            $profile = null;
            if (isset($checkedUser)) {
                // Checks the user role and finds the profile
                $roles = $checkedUser->getRoles();
                foreach ($roles as $role) {

                    if ($role['name'] === Role::ROLE_ARCHER) {
                        $profile = $archerDAO->findOneBy(['id' => $this->parameters['id']]);
                        $roleFlag = Role::ROLE_ARCHER;
                    }
                    else if($role['name'] === Role::ROLE_ADMIN || $role['name'] === Role::ROLE_SUPERADMIN){
                        $profile = $adminDAO->findOneBy(['id' => $this->parameters['id']]);
                        $roleFlag = Role::ROLE_ADMIN;
                    }
                    else if($role['name'] === Role::ROLE_TRAINER){
                        $profile = $trainerDAO->findOneBy(['id' => $this->parameters['id']]);
                        $roleFlag = Role::ROLE_TRAINER;
                    }
                    else if($role['name'] === Role::ROLE_JUDGE){
                        $profile = $judgeDAO->findOneBy(['id' => $this->parameters['id']]);
                        $roleFlag = Role::ROLE_JUDGE;
                    }

                }

                if (isset($profile)) {

                    if (isset($roleFlag)){

                        switch ($roleFlag) {
                            case Role::ROLE_ARCHER:
                                $archerDAO->update($profile, $this->request);
                                DB::commit();
                                break;
                            case  Role::ROLE_ADMIN:
                            case  Role::ROLE_SUPERADMIN:
                                $adminDAO->update($profile, $this->request);
                                DB::commit();
                                break;
                            case Role::ROLE_TRAINER:
                                $trainerDAO->update($profile, $this->request);
                                DB::commit();
                                break;
                            case Role::ROLE_JUDGE:
                                $judgeDAO->update($profile, $this->request);
                                DB::commit();
                                break;
                            default:
                                break;
                        }
                    }
                    else{
                        DB::rollBack();
                        $this->addError(Lang::trans('message.api.profile.error.update.user'));

                    }

                } else{
                    DB::rollBack();
                    $this->addError(Lang::trans('message.api.profile.error.update.user'));

                }

            } else{
                $this->addError(Lang::trans('message.api.auth.error'));

            }

        }
        else
            $this->addError(Lang::trans('message.api.auth.error'));
    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
        // Checks the session user to find his/her roles
        $user = Auth::user();
        $roles = $user->getRoles();

        if (isset($roles)){
            foreach($roles as $role){

                switch($role['name']){
                    case Role::ROLE_ARCHER:
                        return [
                            'first_names' =>'string|max:255',
                            'last_names' => 'string|max:255',
                            'phone_number' => 'numeric',
                            'current_address' => 'string',
                            'employment' => 'string',
                            'civil_status' => 'string'
                        ];
                    case Role::ROLE_TRAINER:
                        return [
                            'first_names' =>'string|max:255',
                            'last_names' => 'string|max:255',
                            'phone_number' => 'numeric',
                            'current_address' => 'string',
                            'employment' => 'string',
                            'civil_status' => 'string'
                        ];
                    case Role::ROLE_ADMIN:
                    case Role::ROLE_SUPERADMIN:
                        return [
                            'first_names' =>'string|max:255',
                            'last_names' => 'string|max:255',
                            'phone_number' => 'numeric',
                            'current_address' => 'string',
                            'employment' => 'string',
                            'civil_status' => 'string'

                        ];
                    case Role::ROLE_JUDGE:
                    return [
                        'first_names' =>'string|max:255',
                        'last_names' => 'string|max:255',
                        'phone_number' => 'numeric',
                        'current_address' => 'string',
                        'employment' => 'string',
                        'civil_status' => 'string'
                    ];
                    default:
                        return [];

                }
            }
        }
        return [];


    }


}