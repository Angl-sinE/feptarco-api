<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 5/05/2019
 * Time: 01:47
 */

namespace App\Handlers\EnrollmentModule;


use App\Handlers\BaseHandler;
use App\DAO\CompetitionEnrollmentDAO;
use App\DAO\UserDAO;
use App\Model\CompetitionEnrollment;
use App\DAO\ArcherProfileDAO;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;

class CheckArcherEnrollmentHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $archerProfile = new ArcherProfileDAO();
            $enrollmentDAO = new CompetitionEnrollmentDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $archerProfile->findOneBy((['user_id' => $this->parameters['id']]));
                if (isset($profile)){

                    $enrollments = $enrollmentDAO->findBy(['archer_id' => $profile->id]);
                    if (!isset($enrollments)){
                        $this->addError(Lang::trans('message.api.competition.enrollments.not.found'));
                    }
                    $response = $this->setResponseData($enrollments);
                    if (!empty($response))
                        $this->setData($response);
                    else
                        $this->setEmptyData();

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

    /**
     * Returns an array with the response
     * @return array
     * @param $enrollments
     */
    private function setResponseData($enrollments)
    {
        $response = [];
        if (!$enrollments->isEmpty()) {
            $enrollmentsCollection = $enrollments->map(function ($enrollment) {
                $status = null;
                if ($enrollment->status === CompetitionEnrollment::STATUS_CONFIRMED){
                    $status = 'Confirmado';
                }
                else if ($enrollment->status === CompetitionEnrollment::STATUS_ENROLLED){
                    $status = 'Sin confirmar';
                }
                else if ($enrollment->status === CompetitionEnrollment::STATUS_REJECTED){
                    $status = 'Rechazado';
                }
                return $values[] = [
                    'id' => $enrollment->id,
                    'status' => $status,
                    'competition' => $enrollment->competition->name,
                    'payment_amount' => $enrollment->payment_amount,
                    'payment_invoice' => $enrollment->payment_invoice,
                    'created_at' => $enrollment->created_at->format("d-m-Y")
                ];

            });
            $response = $enrollmentsCollection->toArray();

        }
        return $response;

    }


    public function validationRules()
    {
        return [];
    }


}
