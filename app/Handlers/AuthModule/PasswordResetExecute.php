<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/10/2018
 * Time: 14:04
 */

namespace App\Handlers\AuthModule;


use App\DAO\PasswordResetDAO;
use App\DAO\UserDAO;
use App\Handlers\BaseHandler;
use App\Notifications\PasswordResetSuccess;
use Illuminate\Support\Facades\Lang;

class PasswordResetExecute extends BaseHandler
{
    protected function handle()
    {
       $passwordResetDao = new PasswordResetDAO();
       $userDao = new UserDAO();
       $passwordReset = $passwordResetDao->findOneBy(['token'=>$this->request['token'], 'email'=>$this->request['email']]);
       if (!isset($passwordReset)){
        $this->addError(Lang::trans('message.api.password.reset.invalid.password.token'));
       }
       $user = $userDao->findOneBy(['email' => $passwordReset->email]);
       if (!isset($user)){
            $this->addError(Lang::trans('message.api.password.reset.error.exists'));
       }
       $user->password = bcrypt($this->request['password']);
       $passwordResetDao->delete($passwordReset);
       $user->notify(new PasswordResetSuccess());
       $response = $this->setResponseData($user);
       $this->setData($response);

    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string'
        ];
    }

    /**
     * @param $user
     * @return mixed
     */
    private function setResponseData($user)
    {
        return $response = [
            'id' => $user->id,
            'email' =>$user->email,
            'feptarco_id' => $user->feptarco_id,
            'status'=>$user->status
        ];


    }


}