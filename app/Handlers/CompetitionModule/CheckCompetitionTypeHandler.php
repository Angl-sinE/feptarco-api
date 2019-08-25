<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 9/03/2019
 * Time: 20:36
 */

namespace App\Handlers\CompetitionModule;


use App\Handlers\BaseHandler;
use App\DAO\CompetitionTypeDAO;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;

class CheckCompetitionTypeHandler extends BaseHandler
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
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile)){
                    $competitionType = $competitionTypeDAO->findAll();
                    if (!isset($competitionType)){
                        $this->addError(Lang::trans('message.api.competitions.error'));
                    }
                    $response = $this->setResponseData($competitionType);
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
     * @param $competitionsTypes
     */
    private function setResponseData($competitionsTypes)
    {
        $response = [];
        if (!$competitionsTypes->isEmpty()) {
            $competitionCollection = $competitionsTypes->map(function ($competition) {
                return $values[] = [
                    'id' => $competition->id,
                    'name' => $competition->name,
                    'details' => $competition->details
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
