<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 9/11/2019
 * Time: 19:31
 */

namespace App\Handlers\AuthModule;


use App\DAO\UserDAO;
use App\Feptarco\Feptarco;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class PasswordRestartHandler extends BaseHandler
{
    protected function handle()
    {
        $userDAO = new UserDAO();
        $user = $userDAO->findOneBy(['email' => $this->request['email']]);

        if (!isset($user)){
            $this->addError(Lang::trans('message.api.profile.error.user'));
        }

        DB::beginTransaction();
        $userDAO->update($user, ['password' => bcrypt(Feptarco::DEFAULT_PASSWORD)]);
        DB::commit();
    }

    public function validationRules()
    {
       return [
           'email' => 'required|email'
       ];
    }

}
