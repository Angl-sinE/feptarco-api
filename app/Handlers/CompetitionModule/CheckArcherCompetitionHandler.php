<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 9/05/2019
 * Time: 20:42
 */

namespace App\Handlers\CompetitionModule;

use App\DAO\CompetitionDAO;
use App\DAO\ArcherProfileDAO;
use App\DAO\UserDAO;
use App\Handlers\BaseHandler;
use App\Model\Competition;
use App\Services\CheckAuthService;
use Illuminate\Support\Facades\Lang;


class CheckArcherCompetitionHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $archerDAO = new ArcherProfileDAO();
            $competitionDAO = new CompetitionDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                $profile = $archerDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile)){
                    $competitions = $competitionDAO->findby(['status' => Competition::STATUS_ACTIVE]);
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
                    'admission_price' => $competition->admission_price,
                    'certification_doc' => $competition->certification_doc,
                    'status' => $competition->status,
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
