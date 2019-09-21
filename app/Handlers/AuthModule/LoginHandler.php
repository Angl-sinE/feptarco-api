<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 06/10/2018
 * Time: 20:08
 */

namespace App\Handlers\AuthModule;



use App\Handlers\BaseHandler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\DAO\ArcherProfileDAO;
use App\DAO\JudgeProfileDAO;
use App\DAO\TrainerProfileDAO;
use App\DAO\AdminProfileDAO;
class LoginHandler extends BaseHandler
{


    protected function handle()
    {
        $email = strtolower($this->request['email']);

        $auth = Auth::attempt(['email' => $email, 'password' => $this->request['password']]);
        if ($auth){
            $user = Auth::user();
            $token = $user->createToken('FeptarcoClient');
            $response = $this->setResponseData($token,$user);
            if(!empty($response))
                $this->setData($response);
            else
                $this->setEmptyData();
        } else{
            $this->addError(Lang::trans('message.api.login.invalid.creds'));
        }
    }

    /**
     * Sets the response array
     * @param $tokenResult
     * @param $user
     * @return array
     */
    private function setResponseData($tokenResult, $user){


        $roles = $user->roles()->get()->toArray();
        $archerDAO = new ArcherProfileDAO();
        $trainerDAO = new TrainerProfileDAO();
        $judgeDAO = new JudgeProfileDAO();
        $adminDAO = new AdminProfileDAO();

        $roleArray = [];
        foreach ($roles as $role){
          $roleArray[] = [
              'name' => $role['name'],
              'is_admin' => $role['is_admin']
          ];
        }

        $archerProfile = $archerDAO->findOneBy((['user_id' => $user->id]));
        $adminProfile = $adminDAO->findOneBy((['user_id' => $user->id]));
        $trainerProfile = $trainerDAO->findOneBy((['user_id' => $user->id]));
        $judgeProfile = $judgeDAO->findOneBy((['user_id' => $user->id]));

        $profiles = [
          'archer_id' => isset($archerProfile->id) ? $archerProfile->id : null,
          'admin_id' => isset($adminProfile->id) ? $adminProfile->id: null,
          'trainer_id' => isset($trainerProfile->id) ? $trainerProfile->id : null,
          'judge_id' => isset($judgeProfile->id) ? $judgeProfile->id: null,
        ];

        return $data[] = [
           'access_token' => $tokenResult->accessToken,
           'user' => $user->email,
           'roles' => $roleArray,
           'profiles' => $profiles,
           'token_type' => 'Bearer',
           'expires' =>Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ];

    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ];
    }

}
