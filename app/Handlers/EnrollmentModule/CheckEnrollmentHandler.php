<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 5/05/2019
 * Time: 00:36
 */

namespace App\Handlers\EnrollmentModule;


use App\Handlers\BaseHandler;
use App\DAO\CompetitionEnrollmentDAO;
use App\DAO\UserDAO;
use App\Model\User;
use App\DAO\AdminProfileDAO;
use App\Model\CompetitionEnrollment;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;

class CheckEnrollmentHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $enrollmentDAO = new CompetitionEnrollmentDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile)){
                    $enrollments = $enrollmentDAO->findAll();
                    if (!isset($enrollments)){
                        $this->addError(Lang::trans('message.api.competition.enrollments.not.found'));
                    }
                    $response = $this->setResponseData($enrollments);
                    if (!empty($response))
                    {
                        $this->setData($response);
                    }
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
            $updated_by = null;

            if (isset($enrollment->updated_by))
                $updated_by = User::find($enrollment->updated_by)->email;

            return $values[] = [
                'id' => $enrollment->id,
                'status' => $enrollment->status,
                'competition' => $enrollment->competition->name,
                'archer' => $enrollment->archer->first_names.''.$enrollment->archer->last_names,
                'payment_amount' => $enrollment->payment_amount,
                'updated_by' => $updated_by,
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
