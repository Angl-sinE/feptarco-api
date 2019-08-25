<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 20/10/2018
 * Time: 16:34
 */

namespace App\Handlers\ProfileModule;


use App\DAO\ArcherProfileDAO;
use App\DAO\JudgeProfileDAO;
use App\DAO\TrainerProfileDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\UserDAO;
use App\Handlers\BaseHandler;
use App\Model\Role;
use App\Model\ArcherProfile;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;

class ProfileHandler extends BaseHandler
{
    protected function handle()
    {

        $user = CheckAuthService::getAuthUser();
        if (isset($user)){
            $userDao = new UserDAO();
            $archerDAO = new ArcherProfileDAO();
            $trainerDAO = new TrainerProfileDAO();
            $judgeDAO = new JudgeProfileDAO();
            $adminDAO = new AdminProfileDAO();

            $checkedUser = $userDao->findOneBy(['email' => $user->email]);
            // Flag for the profile role
            $roleFlag = null;

            if (isset($checkedUser)){
                // Checks the user role and finds the profile
               $roles = $checkedUser->getRoles();
               foreach ($roles as $role){

                 if ($role['name']=== Role::ROLE_ARCHER){
                     $profileData = $archerDAO->findOneBy(['user_id' => $checkedUser->id]);
                     $roleFlag = Role::ROLE_ARCHER;
                 }
                 else if ($role['name'] === Role::ROLE_TRAINER){
                     $profileData = $trainerDAO->findOneBy((['user_id' => $checkedUser->id]));
                     $roleFlag = Role::ROLE_TRAINER;
                 }
                 else if ($role['name'] === Role::ROLE_JUDGE){
                     $profileData = $judgeDAO->findOneBy((['user_id' => $checkedUser->id]));
                     $roleFlag = Role::ROLE_JUDGE;
                 }
                 
                 else if ($role['name'] === Role::ROLE_SUPERADMIN || $role['name'] === Role::ROLE_ADMIN){
                    $profileData = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                    $roleFlag = Role::ROLE_SUPERADMIN;
                }
                
                 else {
                     $this->addError(Lang::trans('message.api.profile.error.not.found'));
                     break;
                 }
               }

               if (isset($profileData)){
                   $response = $this->setResponseData($checkedUser, $profileData, $roleFlag);
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
     * Sets the response array by role
     * @param $roleFlag
     * @param $user
     * @param $profile
     * @return array
     */
    private function setResponseData($user, $profile, $roleFlag)
    {

        $response['profile'] = [];

        $roles = $user->getRoles()->toArray();
        $roleArray = [];
        foreach ($roles as $role){
            $roleArray[] = [
                'name' => $role['name'],
                'is_admin' => $role['is_admin']
            ];
        }

        if (!isset($profile->user->avatar)) {
            $avatarPath = Lang::trans('message.api.profile.avatar.path.not.found');
        }
        else
            $avatarPath = '/uploads/avatars/'.$profile->user->avatar;


        $profileResponse = [
            'profile_id' => $profile->id,
            'email' => $profile->user->email,
            'feptarco_id' => $profile->user->feptarco_id,
            'first_names' => $profile->first_names,
            'last_names' => $profile->last_names,
            'dni' => $profile->dni,
            'age' => $profile->age,
            'birth_date' => $profile->birth_date,
            'gender' => $profile->gender,
            'current_address' => $profile->current_address,
            'phone_number' => $profile->phone_number,
            'user_id' =>$profile->user_id,
            'active' => $profile->user->active,
            'status' => $profile->status,
            'role' => $roleArray,
            'avatar' => $avatarPath,
            'civil_status' => $profile->civil_status,
            'employment' => $profile->employment,
        ];

        switch ($roleFlag){

            case Role::ROLE_ARCHER:
                $progressionSelection = null;
              // Retrieving bow gear collection
              $inventory = $user->getInventory();
              $items = $this->getArcherItems($inventory);

               if ($profile->selection_progress == ArcherProfile::GRUPO_PROYECCION)
                    $progressionSelection = 'Grupo de Proyección';
               else if ($profile->selection_progress == ArcherProfile::GRUPO_TRABAJO)
                    $progressionSelection = 'Grupo de Trabajo';
               else if ($profile->selection_progress == ArcherProfile::PRESELECCION)
                    $progressionSelection = 'Pre-Selección';
               else
                   $progressionSelection = '';
                                                     
              $profileResponse = array_merge($profileResponse,[
                  'federated' => $profile->federated,
                  'current_category'=> $profile->current_category,
                  'current_mode' => $profile->current_mode,
                  'club' =>$profile->club->name,
                  'joined_date' =>$profile->joined_date,
                  'details' => $profile->details,
                  'season_best' =>$profile->season_best,
                  'carrer_best' =>$profile->carreer_best,
                  'number_of_matches'=>$profile->number_of_matches,
                  'average_arrow'=>$profile->average_arrow,
                  'number_of_faults'=>$profile->number_of_faults,
                  'employment'=>$profile->employment,
                  'training_days'=>$profile->training_days,
                  'training_hour_start'=>$profile->training_hour_start,
                  'training_hour_end'=>$profile->training_hour_end,
                  'years_of_experience'=>$profile->years_of_experience,
                  'selection_progress'=> $progressionSelection,
                  'items' => $items,

              ]);
                break;
            case Role::ROLE_TRAINER:

                $profileResponse = array_merge($profileResponse,[
                    'specialty'=> $profile->specialty,
                    'club' =>$profile->club->name,
                    'details' => $profile->details
                ]);
                break;
            case Role::ROLE_JUDGE:

                $profileResponse = array_merge($profileResponse,[
                    'current_category'=> $profile->current_category,
                    'number_of_competitions' => $profile->number_of_competitions,
                    'details' => $profile->details,
                ]);
                break;
            default :
                break;
        }
        return $profileResponse;

    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
        return [];
    }


    /**
     * Retrieve the array of bow gear
     * @return array
     * @param $inventory
     */
    private function getArcherItems($inventory)
    {
        $items[] = [];
        if (count($inventory)){

            $itemCollection = $inventory->map(function ($item) {
            return $items[] = [
                'id' => $item->id,
                'name' => $item->name,
                'code' => $item->code,
                'brand' => $item->brand,
                'details' => $item->details,
                'federation_owned' => $item->federation_owned,
                'type'=> $item->type,
                'quantity' => $item->quantity,
                'owned_by' => $item->owner_user->email,
                'asigned_to' =>$item->asigner_user->email,
            ]; 
           });

        $items = $itemCollection->toArray();

        }
        return $items;

    }


}
