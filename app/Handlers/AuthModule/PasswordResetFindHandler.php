<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/10/2018
 * Time: 12:17
 */

namespace App\Handlers\AuthModule;


use App\DAO\PasswordResetDAO;
use App\Handlers\BaseHandler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;

class PasswordResetFindHandler extends BaseHandler
{
    protected function handle()
    {
       $passwordResetDao = new PasswordResetDAO();

       $passwordReset = $passwordResetDao->findOneBy(['token' =>$this->request['token']]);
       if (!isset($passwordReset)){
          $this->addError(Lang::trans('message.api.password.reset.invalid.password.token'));
       }
       if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()){
            $passwordResetDao->delete($passwordReset);
            $this->addError(Lang::trans('message.api.password.reset.invalid.password.token'));
       }
       $this->setData($passwordReset);

    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
        return [];
    }

}