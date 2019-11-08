<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 11/8/19
 * Time: 4:03 PM
 */

namespace App\Handlers\CompetitionModule;

use App\DAO\ClubDelegateDAO;
use App\Handlers\BaseHandler;
use App\Model\Competition;
use App\Services\CheckAuthService;

class AuthorizeCompetitionHandler extends BaseHandler
{
	protected function handle()
	{
		$user = CheckAuthService::getAuthUser();

		if (!isset($user)) {
			$this->addError(Lang::trans('message.api.auth.error'));
		}

		$competitionDAO = new CompetitionDAO();
		$userDAO = new UserDAO();
		$clubDelegateDAO = new ClubDelegateDAO();
		$checkedUser = $userDAO->findOneBy(['email' => $user->email]);

		if (!isset($authUser)) {
			$this->addError(Lang::trans('message.api.profile.error.user'));
		}

		$profile = $clubDelegateDAO->findOneBy((['user_id' => $checkedUser->id]));

		if (isset($profile)) {
			$this->addError(Lang::trans('message.api.profile.error.not.found'));
		}

		$competition = $competitionDAO->findOneBy([
			'id' => $this->parameters['competition_id']
		]);

		if (!isset($competition)) {
			$this->addError(Lang::trans('message.api.competition.register.not.exists'));
		}

		if ($competition->status === Competition::STATUS_REGISTER) {
			//TODO : Crear Tabla competition participants para listar a los arqueros participantes
			// Solo se puede permitir una autorizacion y registro en competiton_participant si se encuentra
			// el usuario en competition_enrollment

		}

	}

	public function validationRules()
	{
		return [
			'competition_id' => 'required|integer'
		];
	}

}