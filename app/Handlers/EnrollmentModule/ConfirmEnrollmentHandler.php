<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 4/05/2019
 * Time: 23:39
 */

namespace App\Handlers\EnrollmentModule;


use App\Handlers\BaseHandler;
use App\Model\CompetitionEnrollment;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\DAO\AdminProfileDAO;
use App\DAO\CompetitionEnrollmentDAO;
use App\DAO\UserDAO;

class ConfirmEnrollmentHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        // checks the auth
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $competitionEnrollmentDAO = new CompetitionEnrollmentDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            // checks the valid user
            if (isset($checkedUser))
            {
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                // checks the valid profile
                if (isset($profile))
                {
                    //TODO: Revisar si el metodo update del sistema usa el arreglo de fields
                    $enrollment = $competitionEnrollmentDAO->findOneBy(['id' => $this->parameters['id']]);
                    // checks if the enrollment exists
                    if (isset($enrollment)){

                        if ($enrollment->status === CompetitionEnrollment::STATUS_CONFIRMED)
                            $this->addError(Lang::trans('message.api.competition.enrollment.confirm.error'));
                        else{
                            $competitionEnrollmentDAO->update($enrollment,[
                                'status' => CompetitionEnrollment::STATUS_CONFIRMED,
                                'updated_by' => $profile->user_id
                            ]);
                            DB::commit();
                        }
                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.enrollment.not.found'));
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
