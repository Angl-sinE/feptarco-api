<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 9/03/2019
 * Time: 18:06
 */

namespace App\Handlers\CompetitionModule;


use App\DAO\CompetitionTypeDAO;
use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\Model\Competition;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\DAO\CompetitionDAO;

class DeleteCompetitionTypeHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $competitionTypeDAO = new CompetitionTypeDAO();
            $competitionDAO = new CompetitionDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {
                    $competitionType = $competitionTypeDAO->findOneBy(['id' => $this->parameters['id']]);
                    if (isset($competitionType))
                    {
                       // Checks if a competition exists with this type
                       $competition = $competitionDAO->findOneBy(['type_id' => $competitionType->id]);

                       if (isset($competition)){
                           // Checks if the competition is in valid status to delete its type
                           if ($competition->status !== Competition::STATUS_ACTIVE || $competition->status !== Competition::STATUS_FINISHED)
                           {
                               $competitionTypeDAO->delete($competitionType);
                               DB::commit();
                           }
                           else
                               $this->addError(Lang::trans('message.api.competition.type.delete.error'));
                       }
                       else{
                           $competitionTypeDAO->delete($competitionType);
                           DB::commit();
                       }


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
        return [];
    }

}
