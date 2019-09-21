<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 10/09/2019
 * Time: 21:18
 */

namespace App\Handlers\AuthModule;


use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use App\DAO\UserDAO;

class PasswordQuickResetHandler extends BaseHandler
{
    protected function handle()
    {
        $userDao = new UserDAO();
        DB::beginTransaction();
        $checkedUser = $userDao->findOneBy(['email' => $this->request['email']]);
            if (isset($checkedUser)){
                if(Hash::check($this->request['oldPassword'], $checkedUser->password)){
                    $userDao->update($checkedUser, ['password' => bcrypt($this->request['password'])]);
                    DB::commit();
                } else {
                    $this->addError(Lang::trans('message.api.password.reset.incorrect'));
                }
            } else {
                $this->addError(Lang::trans('message.api.profile.error.user'));
            }
    }

    public function validationRules()
    {
       return [
           'email' => 'required',
           'oldPassword' => 'required',
           'password' => ['required',
               'min:6',
               'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
               'confirmed'],
       ];
    }



}
