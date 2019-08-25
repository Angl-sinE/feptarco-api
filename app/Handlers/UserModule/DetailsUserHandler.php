<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 17/03/2019
 * Time: 10:11
 */

namespace App\Handlers\UserModule;

use App\Handlers\BaseHandler;
use App\Model\ArcherProfile;
use App\Model\AdminProfile;
use App\Model\TrainerProfile;
use App\Model\JudgeProfile;
use App\Model\Club;
use App\Services\CheckAuthService;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\JudgeProfileDAO;
use App\DAO\TrainerProfileDAO;
use App\DAO\ArcherProfileDAO;
use Illuminate\Support\Facades\Lang;

class DetailsUserHandler extends BaseHandler
{
    private $userDAO;
    private $adminDAO;
    private $archerDAO;
    private $trainerDAO;
    private $judgeDAO;

    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $this->userDAO = new UserDAO();
            $this->adminDAO = new AdminProfileDAO();
            $this->judgeDAO = new JudgeProfileDAO();
            $this->trainerDAO = new TrainerProfileDAO();
            $this->archerDAO = new ArcherProfileDAO();

            $checkedUser = $this->userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $this->adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    // finds the user
                    $userData = $this->userDAO->findOneBy((['id' => $this->parameters['id']]));

                    // finds the user Profile
                    $adminProfile = $this->adminDAO->findOneBy((['user_id' => $this->parameters['id']]));
                    $archerProfile = $this->archerDAO->findOneBy((['user_id' => $this->parameters['id']]));
                    $judgeProfile = $this->judgeDAO->findOneBy((['user_id' => $this->parameters['id']]));
                    $trainerProfile = $this->trainerDAO->findOneBy((['user_id' => $this->parameters['id']]));

                    $profileName = null;

                    if (isset($adminProfile)){
                        $profileName = 'admin';
                    }
                    if (isset($archerProfile)){
                        $profileName = 'archer';
                    }
                    if (isset($judgeProfile)){
                        $profileName = 'judge';
                    }
                    if (isset($trainerProfile)){
                        $profileName = 'trainer';
                    }

                    $response = $this->setResponseData($userData, $profileName);
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
     * @param $profileName
     * @param $userData
     * @return array
     */
    private function setResponseData($userData,$profileName)
    {
        $response[] = [];
            switch ($profileName){
                case 'admin':
                    $response = [
                        'id' => $userData->id,
                        'feptarco_id' => $userData->feptarco_id,
                        'email' => $userData->email,
                        'active' => $userData->active,
                        'avatar' => $userData->avatar,
                        'dni' => $userData->dni,
                        'status' => $userData->status,
                        'created_at' => $userData->created_at->format("d-m-Y h:i:s"),
                        'updated_at' => $userData->updated_at->format("d-m-Y h:i:s"),
                        'created_by' => $this->getUserEmail($userData->created_by),
                        'updated_by' =>  $this->getUserEmail($userData->updated_by),
                        'first_names' => AdminProfile::where('user_id', $userData->id)->first()->first_names,
                        'last_names' => AdminProfile::where('user_id', $userData->id)->first()->last_names,
                        'gender' => AdminProfile::where('user_id', $userData->id)->first()->gender,
                        'age' => AdminProfile::where('user_id', $userData->id)->first()->age,
                        'birth_date' => AdminProfile::where('user_id', $userData->id)->first()->birth_date,
                        'phone_number' => AdminProfile::where('user_id', $userData->id)->first()->phone_number,
                        'employment' => AdminProfile::where('user_id', $userData->id)->first()->employment,
                        'civil_status' => AdminProfile::where('user_id', $userData->id)->first()->civil_status
                    ];
                break;
                case 'archer':
                      $response = [
                            'id' => $userData->id,
                            'feptarco_id' => $userData->feptarco_id,
                            'email' => $userData->email,
                            'active' => $userData->active,
                            'avatar' => $userData->avatar,
                            'dni' => $userData->dni,
                            'status' => $userData->status,
                            'created_at' => $userData->created_at->format("d-m-Y h:i:s"),
                            'updated_at' => $userData->updated_at->format("d-m-Y h:i:s"),
                            'created_by' => $this->getUserEmail($userData->created_by),
                            'updated_by' =>  $this->getUserEmail($userData->updated_by),
                            'first_names' => ArcherProfile::where('user_id',$userData->id)->first()->first_names,
                            'last_names' => ArcherProfile::where('user_id',$userData->id)->first()->last_names,
                            'gender' => ArcherProfile::where('user_id',$userData->id)->first()->gender,
                            'age' => ArcherProfile::where('user_id',$userData->id)->first()->age,
                            'birth_date' => ArcherProfile::where('user_id',$userData->id)->first()->birth_date,
                            'current_category' => ArcherProfile::where('user_id',$userData->id)->first()->current_category,
                            'current_mode' => ArcherProfile::where('user_id',$userData->id)->first()->current_mode,
                            'federated' => ArcherProfile::where('user_id',$userData->id)->first()->federated,
                            'passport_number' => ArcherProfile::where('user_id',$userData->id)->first()->passport_number,
                            'current_address' => ArcherProfile::where('user_id',$userData->id)->first()->current_address,
                            'phone_number' => ArcherProfile::where('user_id',$userData->id)->first()->phone_number,
                            'national_ranking' => ArcherProfile::where('user_id',$userData->id)->first()->national_ranking,
                            'average_arrow' => ArcherProfile::where('user_id',$userData->id)->first()->average_arrow,
                            'season_best' => ArcherProfile::where('user_id',$userData->id)->first()->season_best,
                            'carreer_best' => ArcherProfile::where('user_id',$userData->id)->first()->carreer_best,
                            'number_of_matches' => ArcherProfile::where('user_id',$userData->id)->first()->number_of_matches,
                            'current_score' => ArcherProfile::where('user_id',$userData->id)->first()->current_score,
                            'joined_date' => ArcherProfile::where('user_id',$userData->id)->first()->joined_date,
                            'number_of_faults' => ArcherProfile::where('user_id',$userData->id)->first()->number_of_faults,
                            'selection_progress' => ArcherProfile::where('user_id',$userData->id)->first()->selection_progress,
                            'employment' => ArcherProfile::where('user_id',$userData->id)->first()->employment,
                            'training_days' => ArcherProfile::where('user_id',$userData->id)->first()->training_days,
                            'training_hour_start' => ArcherProfile::where('user_id',$userData->id)->first()->training_hour_start,
                            'training_hour_end' => ArcherProfile::where('user_id',$userData->id)->first()->number_of_matches,
                            'amount_training_hours' => ArcherProfile::where('user_id',$userData->id)->first()->amount_training_hours,
                            'years_of_experience' => ArcherProfile::where('user_id',$userData->id)->first()->years_of_experience,
                            'civil_status' => ArcherProfile::where('user_id',$userData->id)->first()->civil_status,
                            'club' => Club::find(ArcherProfile::where('user_id',$userData->id)->first()->club_id)->name
                      ];
                    break;
                case 'trainer':
                    if (isset(TrainerProfile::where('user_id',$userData->id)->first()->club_id))
                        $club = (Club::find(TrainerProfile::where('user_id',$userData->id)->first()->club_id))->name;
                    else
                        $club = 'No esta asignado a un Club';
                    $response = [
                        'id' => $userData->id,
                        'feptarco_id' => $userData->feptarco_id,
                        'email' => $userData->email,
                        'active' => $userData->active,
                        'avatar' => $userData->avatar,
                        'dni' => $userData->dni,
                        'status' => $userData->status,
                        'created_at' => $userData->created_at->format("d-m-Y h:i:s"),
                        'updated_at' => $userData->updated_at->format("d-m-Y h:i:s"),
                        'created_by' => $this->getUserEmail($userData->created_by),
                        'updated_by' =>  $this->getUserEmail($userData->updated_by),
                        'first_names' => TrainerProfile::where('user_id', $userData->id)->first()->first_names,
                        'last_names' => TrainerProfile::where('user_id', $userData->id)->first()->last_names,
                        'gender' => TrainerProfile::where('user_id', $userData->id)->first()->gender,
                        'age' => TrainerProfile::where('user_id', $userData->id)->first()->age,
                        'birth_date' => TrainerProfile::where('user_id', $userData->id)->first()->birth_date,
                        'phone_number' => TrainerProfile::where('user_id', $userData->id)->first()->phone_number,
                        'employment' => TrainerProfile::where('user_id', $userData->id)->first()->employment,
                        'current_address' => TrainerProfile::where('user_id', $userData->id)->first()->current_address,
                        'civil_status' => TrainerProfile::where('user_id', $userData->id)->first()->civil_status,
                        'specialty' => TrainerProfile::where('user_id', $userData->id)->first()->specialty,
                        'club' => $club,
                    ];
                    break;
                case 'judge':

                    $response = [
                        'id' => $userData->id,
                        'feptarco_id' => $userData->feptarco_id,
                        'email' => $userData->email,
                        'active' => $userData->active,
                        'avatar' => $userData->avatar,
                        'dni' => $userData->dni,
                        'status' => $userData->status,
                        'created_at' => $userData->created_at->format("d-m-Y h:i:s"),
                        'updated_at' => $userData->updated_at->format("d-m-Y h:i:s"),
                        'created_by' => $this->getUserEmail($userData->created_by),
                        'updated_by' =>  $this->getUserEmail($userData->updated_by),
                        'first_names' => JudgeProfile::where('user_id', $userData->id)->first()->first_names,
                        'last_names' => JudgeProfile::where('user_id', $userData->id)->first()->last_names,
                        'gender' => JudgeProfile::where('user_id', $userData->id)->first()->gender,
                        'age' => JudgeProfile::where('user_id', $userData->id)->first()->age,
                        'birth_date' => JudgeProfile::where('user_id', $userData->id)->first()->birth_date,
                        'phone_number' => JudgeProfile::where('user_id', $userData->id)->first()->phone_number,
                        'employment' => JudgeProfile::where('user_id', $userData->id)->first()->employment,
                        'civil_status' => JudgeProfile::where('user_id', $userData->id)->first()->civil_status,
                        'current_category' => JudgeProfile::where('user_id', $userData->id)->first()->current_category,
                        'current_address' => JudgeProfile::where('user_id', $userData->id)->first()->current_address,
                        'number_of_competitions' => JudgeProfile::where('user_id', $userData->id)->first()->number_of_competitions,
                    ];
                    break;
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

    public function validationRules()
    {
        return [];
    }


}
