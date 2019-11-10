<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 06/10/2018
 * Time: 20:09
 */
namespace App\Handlers\AuthModule;
use App\DAO\PasswordResetDAO;
use App\DAO\UserDAO;
use App\Handlers\BaseHandler;
use App\Model\PasswordReset;
use App\Model\Role;
use App\Notifications\PasswordResetRequest;
use Illuminate\Support\Facades\Lang;


class PasswordResetEmailHandler extends BaseHandler
{
	protected function handle()
	{
		$userDao = new UserDAO();
		$passwordResetDao = new PasswordResetDAO();
		$user = $userDao->findOneBy(['email' => $this->request['email']]);

		if (!$user) {
			$this->addError(Lang::trans('message.api.password.reset.error.exists'));
		}

		$passwordReset = $passwordResetDao->findOneBy(['email' =>$user->email]);

		if ($passwordReset) {
			$passwordResetDao->update($passwordReset,['email'=>$user->email]);
		}
		else {
		   $passwordReset = new PasswordReset();
		   $passwordReset->fill(['email' => $user->email, 'token' =>str_random(60)]);
		   $passwordResetDao->create($passwordReset);
		}

		if ($user && $passwordReset) {
			$this->setData(['token' => $passwordReset->token, 'email' => $user->email]);
			$user->notify(
				new PasswordResetRequest($passwordReset->token)
			);

		}
		else
			$this->addError(Lang::trans('message.api.password.reset.error'));

	}
	public function validationRules()
	{
	   return [
			'email' => 'required|string|email|max:255',
	   ];
	}

}
