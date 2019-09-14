<?php

namespace App\Handlers\AuthModule;
use App\DAO\ClubDAO;
use App\DAO\UserDAO;
use App\DAO\RoleDAO;
use App\Handlers\BaseHandler;
use App\Model\User;
use App\Model\ArcherProfile;
use App\Model\TrainerProfile;
use App\Model\JudgeProfile;
use App\Model\AdminProfile;
use App\Model\Role;
use App\DAO\ArcherProfileDAO;
use App\DAO\JudgeProfileDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\TrainerProfileDAO;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use App\Services\CheckAuthService;

class RegisterHandler extends BaseHandler
{

    /**
     * @throws \Exception
     */
    protected function handle()
    {


           $user = CheckAuthService::getAuthUser();
           if (isset($user)) {
               $userDao = new UserDAO();
               $roleDao = new RoleDAO();
               $adminDAO = new AdminProfileDAO();
               DB::beginTransaction();

               $checkedUser = $userDao->findOneBy(['email' => $user->email]);
               if (isset($checkedUser)) {
                   $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                   if (isset($profile))
                   {
                       $user = new User();
                       $profile = null;
                       $response[] = [];

                       $user->email = strtolower($this->request['email']);
                       $user->password = bcrypt($this->request['password']);
                       $user->dni =  $this->request['dni'];
                       $user->feptarco_id = $this->generateFeptarcoId($this->request['first_names'], $this->request['dni']);
                       $user->created_by = $checkedUser->id;
                       $user->updated_by = $checkedUser->id;
                       $userDao->create($user);
                       // checks if the user was created
                       if (!$user->id){
                           DB::rollBack();
                           $this->addError(Lang::trans('message.api.error.database.create.user'));
                       }
                       // Once the user is created the corresponding role is attached to it
                       $user->roles()->attach($roleDao->findBy(['name' => $this->request['role']]));


                       switch ($this->request['role']){
                           case Role::ROLE_ARCHER:
                               $profile =  $this->registerArcher($user);
                               break;
                           case Role::ROLE_ADMIN:
                               $profile =  $this->registerAdmin($user);
                               break;
                               break;
                           case Role::ROLE_TRAINER:
                               $profile =  $this->registerTrainer($user);
                               break;
                           case Role::ROLE_JUDGE:
                               $profile =  $this->registerJudge($user);
                               break;
                           default:
                               break;
                       }
                       if (isset($profile)){
                           DB::commit();
                           $response = $this->setResponseData($this->request['role'], $user, $profile);
                       }
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
     * Returns the validation array depending on the role
     * @param null $requestData
     * @return array|mixed|null
     */
    public function validationRules()
    {
       
        $role = $this->request['role'];

        switch ($role){
            case Role::ROLE_ARCHER:
                return [
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => ['required',
                                    'min:6',
                                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                                    'confirmed'],
                    'first_names' =>'required|string|max:255',
                    'last_names' => 'required|string|max:255',
                    'gender' => 'required|string',
                    'age' => 'required|numeric|min:2',
                    'dni' => 'required|string|max:10|unique:users',
                    'birth_date' =>'required',
                    'current_category' => 'required|string',
                    'current_mode' => 'required|string',
                    'role' => 'required|string',
                    'federated' => 'required|boolean',
                    'club' => 'required|string',
                    'selection_progress' => 'integer',
                    'phone_number' => 'string',
                    'current_address' => 'string',
                    'passport_number' => 'string',
                    'current_score' => 'integer',
                    'employment' => 'string',
                    'training_days' => 'string',
                    'training_hour_start' => 'date',
                    'training_hour_end' => 'date',
                    'amount_training_hours' => 'integer',
                    'years_of_experience' => 'integer',
                    'civil_status' => 'string'
                ];
                break;
            case Role::ROLE_ADMIN:
            return [
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required',
                                'min:6',
                                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                                'confirmed'],
                'first_names' =>'required|string|max:255',
                'last_names' => 'required|string|max:255',
                'gender' => 'required|string',
                'age' => 'required|numeric|min:2',
                'birth_date' =>'required',
                'dni' => 'required|string|min:8|unique:users',
                'civil_status' =>'required|string',
                'employment' =>'required|string',
                'phone_number' => 'string',
                'current_address' => 'string',
                'role' => 'required|string',
            ];
            break;
            case Role::ROLE_TRAINER:
                return [
                    'email' => 'required|string|email|max:255|unique:users',
                    'first_names' =>'required|string|max:255',
                    'last_names' => 'required|string|max:255',
                    'password' => ['required',
                        'min:6',
                        'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                        'confirmed'],
                    'dni' => 'required|string|min:8|unique:users',
                    'age' => 'required|numeric|min:2',
                    'role' => 'required|string',
                    'gender' => 'required|string',
                    'birth_date' =>'required',
                    'employment' =>'required|string',
                    'civil_status' =>'required|string',
                    'specialty' => 'required|string',
                    'phone_number' => 'string',
                    'current_address' => 'string',
                    'club' => 'string'
                ];
                break;
            case Role::ROLE_JUDGE:
                return [
                    'email' => 'required|string|email|max:255|unique:users',
                    'first_names' =>'required|string|max:255',
                    'last_names' => 'required|string|max:255',
                    'password' => ['required',
                        'min:6',
                        'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                        'confirmed'],
                    'dni' => 'required|string|min:8|unique:users',
                    'role' => 'required|string',
                    'age' => 'required|numeric|min:2',
                    'gender' => 'required|string',
                    'birth_date' =>'required',
                    'employment' =>'required|string',
                    'civil_status' =>'required|string',
                    'current_category' => 'string',
                    'phone_number' => 'string',
                    'current_address' => 'string',
                ];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * Sets the response array by role
     * @param $role
     * @param $user
     * @param $profile
     * @return array
     */
    private function setResponseData($role, $user, $profile){
        $data = [];

        switch ($role){
            case Role::ROLE_ARCHER:
                $data = [
                    'id' => $user->id,
                    'email' => $user->email,
                    'feptarco_id' =>$user->feptarco_id,
                    'first_names' => $profile->first_names,
                    'last_names' => $profile->last_names,
                    'dni' => $user->dni,
                    'age' => $profile->age,
                    'birth_date' => $profile->birth_date->format("d-m-Y"),
                    'gender' => $profile->gender,
                    'category' => $profile->current_category,
                    'mode' => $profile->current_mode,
                    'federated' => $profile->federated,
                    'national_ranking' => $profile->national_ranking,
                    'phone_number' => $profile->phone_number,
                    'current_address' => $profile->current_address
                ];
                break;

            case Role::ROLE_TRAINER:
            case Role::ROLE_JUDGE:
            $data = [
                'id' => $user->id,
                'email' => $user->email,
                'first_names' => $profile->first_names,
                'last_names' => $profile->last_names,
                'feptarco_id' =>$user->feptarco_id,
                'dni' =>$user->dni,
                'age' =>$profile->age,
                'birth_date' => $profile->birth_date->format("d-m-Y"),
                'employment' => $profile->employment,
                'civil_status' => $profile->civil_status,
                'gender' =>$profile->gender,
                'category' => $profile->current_category,
                'phone_number' => $profile->phone_number,
                'current_address' => $profile->current_address,

            ];
            break;

            case Role::ROLE_ADMIN:
            $data = [
                'id' => $user->id,
                'email' => $user->email,
                'first_names' => $profile->first_names,
                'last_names' => $profile->last_names,
                'feptarco_id' =>$user->feptarco_id,
                'dni' =>$user->dni,
                'age' =>$profile->age,
                'birth_date' => $profile->birth_date->format("d-m-Y"),
                'employment' => $profile->employment,
                'civil_status' => $profile->civil_status,
                'gender' =>$profile->gender,
                'title' =>$profile->title,
                'phone_number' => $profile->phone_number,
                'current_address' => $profile->current_address,

            ];
                break;
           default:
                break;
        }
        return $data;
    }

    /**
     * Creates a new archer profile for a user and registers the role
     * @param Model $user
     * @return ArcherProfile|null
     */
    private function registerArcher(Model $user){
        $archer = new ArcherProfile();
        $archerDao = new ArcherProfileDAO();
        $clubDao = new ClubDAO();
        $archer->first_names = $this->request['first_names'];
        $archer->last_names = $this->request['last_names'];
        $archer->gender = $this->request['gender'];
        $archer->age = $this->request['age'];
        if (gettype($this->request['birth_date']) === 'string')
           $formatBirthDate = new DateTime($this->request['birth_date']);

        else
            $formatBirthDate = $this->request['birth_date'];

        $archer->birth_date = $formatBirthDate;
        $archer->federated = $this->request['federated'];
        $archer->selection_progress = isset($this->request['selection_progress']) ? $this->request['selection_progress']: null;
        $archer->current_category =  $this->request['current_category'];
        $archer->current_mode =  $this->request['current_mode'];
        $archer->current_address = isset($this->request['current_address']) ? $this->request['current_address']: null;
        $archer->phone_number = isset($this->request['phone_number']) ? $this->request['phone_number']: null;
        $archer->national_ranking = isset($this->request['national_ranking']) ? $this->request['national_ranking']: null;
        $archer->current_category = isset($this->request['current_category']) ? $this->request['current_category']: null;
        $archer->passport_number = isset($this->request['passport_number']) ? $this->request['passport_number']: null;
        $archer->current_score = isset($this->request['current_score']) ? $this->request['current_score']: null;
        $archer->employment = isset($this->request['employment']) ? $this->request['employment']: null;
        $archer->training_days = isset($this->request['training_days']) ? $this->request['training_days']: null;
        $archer->training_hour_end = isset($this->request['training_hour_end']) ? $this->request['training_hour_end']: null;
        $archer->training_hour_start = isset($this->request['training_hour_start']) ? $this->request['training_hour_start']: null;
        $archer->amount_training_hours = isset($this->request['amount_training_hours']) ? $this->request['amount_training_hours']: null;
        $archer->years_of_experience = isset($this->request['years_of_experience']) ? $this->request['years_of_experience']: null;
        $archer->civil_status = isset($this->request['civil_status']) ? $this->request['civil_status']: null;
        $archer->joined_date = new \DateTime();
        $archer->user_id = $user->id;
        // search the club the archer belongs to
        $club = $clubDao->findOneBy(['code' =>$this->request['club']]);

        if (!isset($club)){
            DB::rollBack();
            $this->addError(Lang::trans('messsage.api.error.data.create.archer.club'));
            return null;
        }
        $archer->club_id = $club->id;

        $archerDao->create($archer);

        if (!isset($archer->id)){
            DB::rollBack();
            $this->addError(Lang::trans('message.api.error.data.create.archer'));
            return null;
        }
        return $archer;
}

    /**
     * @param Model $user
     * @return AdminProfile|null
     * @throws \Exception
     */
    private function registerAdmin(Model $user){

        $adminProfile = new AdminProfile();
        $adminProfileDAO = new AdminProfileDAO();
        $adminProfile->first_names = $this->request['first_names'];
        $adminProfile->last_names = $this->request['last_names'];
        $adminProfile->age = $this->request['age'];
        $adminProfile->gender = $this->request['gender'];
        $adminProfile->birth_date =  new DateTime($this->request['birth_date']);
        $adminProfile->employment =  $this->request['employment'];
        $adminProfile->civil_status =  $this->request['civil_status'];
        $adminProfile->phone_number = isset($this->request['phone_number']) ? $this->request['phone_number']: null;
        $adminProfile->current_address = isset($this->request['current_address']) ? $this->request['current_address']: null;
        $adminProfile->user_id = $user->id;

        $adminProfileDAO->create($adminProfile);
          if (!isset($adminProfile->id)){
              DB::rollBack();
              $this->addError(Lang::trans('message.api.error.database.create.admin'));
              return null;
          }
        return $adminProfile;
    }

    /**
     * @param Model $user
     * @return TrainerProfile|null
     * @throws \Exception
     */
    private function registerTrainer(Model $user){

        $trainer = new TrainerProfile();
        $trainerDao = new TrainerProfileDAO();
        $clubDao = new ClubDAO();
        $trainer->first_names =  $this->request['first_names'];
        $trainer->last_names =  $this->request['last_names'];
        $trainer->age = $this->request['age'];
        $trainer->gender = $this->request['gender'];
        $trainer->birth_date =  new DateTime($this->request['birth_date']);
        $trainer->employment = $this->request['employment'];
        $trainer->civil_status = $this->request['civil_status'];
        $trainer->current_address = isset($this->request['address']) ? $this->request['address']: null;
        $trainer->phone_number = isset($this->request['phone_number']) ? $this->request['phone_number']: null;
        $trainer->specialty =  $this->request['specialty'];
        $trainer->user_id = $user->id;


        // search the club the trainer belongs to
        if (isset($this->request['club'])){
            $club = $clubDao->findOneBy(['code' =>$this->request['club']]);
            if (!isset($club)){
                DB::rollBack();
                $this->addError(Lang::trans('message.api.error.data.create.archer.club'));
            }
            $trainer->club_id = $club->id;
        }

        $trainerDao->create($trainer);

        if (!isset($trainer->id)){
            DB::rollBack();
            $this->addError(Lang::trans('message.api.error.data.create.trainer'));
            return null;
        }
        return $trainer;
    }

    /**
     * @param Model $user
     * @return JudgeProfile|null
     * @throws \Exception
     */
    private function registerJudge(Model $user){
        $judge = new JudgeProfile();
        $judgeDao = new JudgeProfileDAO();
        $judge->first_names =  $this->request['first_names'];
        $judge->last_names =  $this->request['last_names'];
        $judge->age = $this->request['age'];
        $judge->gender = $this->request['gender'];
        $judge->birth_date =  new DateTime($this->request['birth_date']);
        $judge->employment =  $this->request['employment'];
        $judge->civil_status =  $this->request['civil_status'];
        $judge->current_address = isset($this->request['current_address']) ? $this->request['current_address']: null;
        $judge->phone_number = isset($this->request['phone_number']) ? $this->request['phone_number']: null;
        $judge->current_category = isset($this->request['current_category']) ? $this->request['current_category']: null;
        $judge->user_id = $user->id;

        $judgeDao->create($judge);
        if (!isset($judge->id)){
            DB::rollBack();
            $this->addError(Lang::trans('message.api.error.data.create.judge'));
            return null;
        }
        return $judge;
    }

    /**
     * Creates the Feptarco Id
     *
     * @param $dni
     * @param $firstNamegenerateFeptarcoId
     * @param $lastName
     * @return mixed
     */
    private function generateFeptarcoId($firstName, $dni){

        $first = strtoupper(substr($firstName,0,1));
        $feptarcoId = $dni.'-'.$first;

        return $feptarcoId;
    }

}
