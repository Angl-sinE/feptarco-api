<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/01/2019
 * Time: 22:46
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
use App\DAO\CompetitionTypeDAO;
use DateTime;

class CreateCompetitionHandler extends BaseHandler
{
    protected function handle()
    {
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $competitionDAO = new CompetitionDAO();
            $competitionTypeDAO = new CompetitionTypeDAO();
            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser))
            {
                DB::beginTransaction();
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
                if (isset($profile))
                {


                    $competition = $competitionDAO->findOneBy([
                         'name' => $this->request['name']
                    ]);

                    if (!isset($competition))
                    {

                        $competition = new Competition();
                        $startDate = new DateTime($this->request['start_date']);
                        $endDate = new DateTime($this->request['end_date']);

                        $competition->start_date = $startDate;
                        $competition->end_date = $endDate;
                        $competition->name = $this->request['name'];
                        $competition->location = $this->request['location'];
                        $competition->coordinates = isset($this->request['coordinates']) ? $this->request['coordinates']: null;
                        $competition->details = isset($this->request['details']) ? $this->request['details']: null;
                        $competition->admission_price = isset($this->request['admission_price']) ? $this->request['admission_price']: null;
                        $competition->certification_doc = isset($this->request['certification_doc']) ? $this->request['certification_doc']: null;
                        $competition->status = Competition::STATUS_REGISTER;

                        $type = $competitionTypeDAO->findOneBy(['id' => $this->request['type']]);
                        if (!isset($type)){
                            DB::rollback();
                            $this->addError(Lang::trans('message.api.competition.type.register.not.found'));
                        }else{
                            $competition->type_id = $type->id;
                            $competitionDAO->create($competition);
                        }

                        if (!isset($competition->id)){
                            DB::rollback();
                            $this->addError(Lang::trans('message.api.competition.register.error'));
                        }
                        else{
                            DB::commit();
                        }

                    }
                    else
                        $this->addError(Lang::trans('message.api.competition.register.exists'));
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
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required|string',
            'name' => 'required|string',
            'type' => 'required|integer',
            'coordinates' => 'string',
            'certification_doc' => 'string',
            'details' => 'string',
        ];
    }


}
