<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 02/02/2019
 * Time: 20:45
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
class UpdateCompetitionHandler extends  BaseHandler
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

                    if (isset($this->request['start_date'])){
                        $startDate = $this->request['start_date'];
                    }
                    if (isset($this->request['end_date'])){
                        $endDate = $this->request['end_date'];
                    }

                    $competition = $competitionDAO->findOneBy([
                        'id' => $this->parameters['id']
                    ]);


                    if (isset($competition))
                    {
                        // Checking the competition status for valid update
                        if ($competition->status === Competition::STATUS_REGISTER){
                           if (isset($startDate)){
                               $competition->start_date = new DateTime($startDate);
                           }
                           elseif (isset($endDate)){
                              $competition->end_date = new DateTime($endDate);
                           }
                           // Checks if the competition type is a request value and finds the model
                           elseif (isset($this->request['type'])){
                               $competitionType = $competitionTypeDAO->findOneBy(['id' => $this->request['type']]);

                               if (isset($competitionType)){
                                   $competition->type_id = $competitionType->id;

                               }
                               else{
                                   DB::rollback();
                                   $this->addError(Lang::trans('message.api.competition.type.register.not.found'));
                               }

                           }
                           // Updating the competition
                            $competitionDAO->update($competition, [
                                'location' => isset($this->request['location']) ? $this->request['location']: $competition->location,
                                'name' => isset($this->request['name']) ? $this->request['name']: $competition->name,
                                'admission_price' => isset($this->request['admission_price']) ? $this->request['admission_price']: $competition->admission_price,
                                'coordinates' => isset($this->request['coordinates']) ? $this->request['coordinates']: $competition->coordinates,
                                'details' => isset($this->request['details']) ? $this->request['details']: $competition->details,
                                'certification_doc' => isset($this->request['certification_doc']) ? $this->request['certification_doc']: $competition->certification_doc,
                            ]);
                            DB::commit();
                       }
                       else{
                           $this->addError(Lang::trans('message.api.competition.update.status.invalid'));
                       }

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
       return [
           'coordinates' => 'string',
           'location' => 'string',
           'type' => 'integer',
           'details' => 'string',
           'certification_doc' => 'string',
           'name' => 'string'
       ];
    }


}
