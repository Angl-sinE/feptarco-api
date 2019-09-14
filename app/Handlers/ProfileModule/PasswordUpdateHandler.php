<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 17/11/2018
 * Time: 18:05
 */

namespace App\Handlers\ProfileModule;


use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\DAO\UserDAO;

class PasswordUpdateHandler extends BaseHandler
{
    protected function handle()
    {
        $user = Auth::user();
        if (isset($user)) {
            $userDao = new UserDAO();
            DB::beginTransaction();
            $checkedUser = $userDao->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                  if(Hash::check($this->request['password'], $checkedUser->password)){
                      $this->addError(Lang::trans('message.api.profile.password.repeat.error'));
                  }
                  else{
                      $newPassword = bcrypt($this->request['password']);
                      $userDao->update($checkedUser, ['password' => $newPassword]);
                      DB::commit();
                      $this->setData(Lang::trans('message.api.profile.password.update.success'));
                  }
            }
            else{
                DB::rollBack();
                $this->addError(Lang::trans('message.api.profile.error.user'));
            }
        }
        else
            $this->addError(Lang::trans('message.api.auth.error'));

    }

    /**
     *
     * Returns the validation array depending on the role
     * @return array|mixed
     */
    //TODO: Agregar regla para confirmar contraseña actual
    public function validationRules()
    {
        return [
            'password' => ['required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'confirmed'],
            'email' => 'required|string|email|max:255'
        ];
    }


}
