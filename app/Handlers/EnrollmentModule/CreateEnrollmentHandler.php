<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 10/02/2019
 * Time: 17:36
 */

namespace App\Handlers\EnrollmentModule;


use App\Model\CompetitionEnrollment;
use App\Handlers\BaseHandler;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;
use App\DAO\ArcherProfileDAO;
use App\DAO\CompetitionEnrollmentDAO;
use App\DAO\UserDAO;

class CreateEnrollmentHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        // checks the auth
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $archerDAO = new ArcherProfileDAO();
            $competitionEnrollmentDAO = new CompetitionEnrollmentDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            // checks the valid user
            if (isset($checkedUser))
            {
                DB::beginTransaction();
                $profile = $archerDAO->findOneBy((['user_id' => $checkedUser->id]));
                // checks the valid profile
                if (isset($profile))
                {
                    $enrollment = $competitionEnrollmentDAO->findOneBy(['archer_id' => $this->request['archer_id'],'competition_id' => $this->request['competition_id']]);
                    // checks if the enrollment does not exists

                    if (!isset($enrollment)){
                        $enrollment = new CompetitionEnrollment();
                        $enrollment->competition_id = $this->request['competition_id'];
                        $enrollment->archer_id = $this->request['archer_id'];
                        $enrollment->payment_amount = $this->request['payment_amount'];
                        $enrollment->payment_invoice = $this->request['payment_invoice'];
                        $enrollment->status = CompetitionEnrollment::STATUS_ENROLLED;

                        $competitionEnrollmentDAO->create($enrollment);
                        DB::commit();

                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.enrollment.register.exists'));
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

        return[
            'competition_id' => 'required|integer',
            'archer_id' => 'required|integer',
            'payment_amount' => 'required|numeric',
            'payment_invoice' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1080',
        ];

    }

}
