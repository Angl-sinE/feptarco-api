<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 02/02/2019
 * Time: 20:47
 */

namespace App\Handlers\CompetitionModule;


use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\Model\Competition;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\CompetitionDAO;


class DeleteCompetitionHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $competitionDAO = new CompetitionDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $competition = $competitionDAO->findOneBy(['id' => $this->parameters['id']]);
                    if (isset($competition))
                    {
                        // Checks if the competition is in valid status to delete
                        if ($competition->status !== Competition::STATUS_ACTIVE || $competition->status !== Competition::STATUS_FINISHED)
                        {
                            $competitionDAO->update($competition,['status' =>Competition::STATUS_CANCELED]);
                            DB::commit();
                        }
                        else
                            $this->addError(Lang::trans('message.api.competition.register.not.exists'));

                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.register.not.exists'));
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
       return [];
    }

}