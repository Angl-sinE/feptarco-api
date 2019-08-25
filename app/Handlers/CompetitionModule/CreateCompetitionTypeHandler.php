<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 24/01/2019
 * Time: 22:23
 */

namespace App\Handlers\CompetitionModule;


use App\Model\CompetitionType;
use App\DAO\CompetitionTypeDAO;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class CreateCompetitionTypeHandler extends BaseHandler
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
                    $checkType =$competitionTypeDAO->findOneBy(['name' => $this->request['name']]);
                    if (!isset($checkType))
                    {
                        $competitionType = new CompetitionType();
                        $competitionType->name = $this->request['name'];
                        $competitionType->details = isset($this->request['details']) ? $this->request['details']: null;
                        $competitionTypeDAO->create($competitionType);
                        DB::commit();

                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.type.register.exists'));
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
            'name' => 'required|string',
            'details' => 'string'
        ];

    }

}