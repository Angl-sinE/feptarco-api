<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 9/03/2019
 * Time: 16:47
 */

namespace App\Handlers\CompetitionModule;


use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\CompetitionTypeDAO;


class UpdateCompetitionTypeHandler extends  BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $competitionTypeDAO = new CompetitionTypeDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $competitionType = $competitionTypeDAO->findOneBy([
                        'id' => $this->parameters['id']
                    ]);

                    if (isset($competitionType))
                    {
                        // Updating the competition type
                        $competitionTypeDAO->update($competitionType, $this->request);
                         DB::commit();
                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.type.register.not.found'));
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

    public function validationRules()
    {
        return [
            'name' => 'string',
            'details' => 'string'
        ];
    }

}
