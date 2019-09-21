<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/10/2018
 * Time: 22:21
 */

namespace App\Handlers\AthleteModule;

use App\DAO\ArcherProfileDAO;
use App\DAO\UserDAO;
use App\DAO\AdminProfileDAO;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Lang;
use App\Services\CheckAuthService;

class AthleteHandler extends BaseHandler
{
    /**
     * @throws \Exception
     */
    protected function handle()
    {
        // valida autenticacion
        $user = CheckAuthService::getAuthUser();
        if (isset($user))
        {
            $userDAO = new UserDAO();
            $adminDAO = new AdminProfileDAO();
            $archerDAO = new ArcherProfileDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            // valida que el usuario exista
            if (isset($checkedUser))
            {
                $profile = $adminDAO->findOneBy((['user_id' => $checkedUser->id]));
               // verifica que el perfil corresponda al usuario autorizado
                if (isset($profile))
                {
                    $archers = $archerDAO->findBy(['status' => 1]);
                    if (!isset($archers)){
                        $this->addError(Lang::trans('message.api.athletes.error'));
                    }
                    $response = $this->setResponseData($archers);
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
     * Formats the array response data
     * @param $archers
     * @return array
     */
    private function setResponseData($archers)
    {
       $response = [];
       //checks if the collection is not empty

       if (!$archers->isEmpty()) {
           $archerCollection = $archers->map(function ($item) {
               return $values[] = [
                   'feptarco_id' => $item->user->feptarco_id,
                   'email' => $item->user->email,
                   'first_names' => $item->first_names,
                   'last_names' => $item->last_names,
                   'dni' => $item->dni,
                   'id' => $item->user->id,
                   'age' => $item->age,
                   'birth_date' =>$item->birth_date,
                   'gender' => $item->gender,
                   'current_address' => $item->current_address,
                   'phone_number' => $item->phone_number,
                   'current_category' => $item->current_category,
                   'mode' => $item->current_mode,
                   'club' => $item->club->name,
                   'joined_date' => $item->joined_date,
                   'details' => $item->details,
                   'season_best' => $item->season_best,
                   'carreer_best' => $item->carreer_best,
                   'number_of_matches' => $item->number_of_matches,
                   'average_arrow' => $item->average_arrow,
                   'number_of_faults' => $item->number_of_faults
               ];
           });
           $response = $archerCollection->toArray();
       }

      return $response;
    }

    /**
     * Returns the validation rules array
     * @return array
     */
    public function validationRules()
    {
       return [];
    }

}
