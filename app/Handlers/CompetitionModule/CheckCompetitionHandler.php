<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 03/02/2019
 * Time: 0:17
 */

namespace App\Handlers\CompetitionModule;
use App\DAO\CompetitionDAO;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;

class CheckCompetitionHandler extends BaseHandler
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
            if (isset($checkedUser))
            {
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile)){
                    $competitions = $competitionDAO->findAll();
                    if (!isset($competitions)){
                        $this->addError(Lang::trans('message.api.competitions.error'));
                    }
                    $response = $this->setResponseData($competitions);
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
     * @param $competitions
     */
    private function setResponseData($competitions)
    {
        $response = [];
        if (!$competitions->isEmpty()) {
            $competitionCollection = $competitions->map(function ($competition) {
                $status = null;
                return $values[] = [
                    'id' => $competition->id,
                    'annoucement_date' => $competition->annoucement_date,
                    'start_date' => $competition->start_date,
                    'end_date' => $competition->end_date,
                    'name' => $competition->name,
                    'coordinates' => $competition->coordinates,
                    'location' => $competition->location,
                    'details' =>$competition->details,
                    'certification_doc' => $competition->certification_doc,
                    'status' => $competition->status,
                    'admission_price' => $competition->admission_price,
                    'type' => $competition->type->name
                ];

            });
            $response = $competitionCollection->toArray();

        }
        return $response;

    }


    public function validationRules()
    {
        return [];
    }


}
