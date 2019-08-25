<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 11/10/2018
 * Time: 22:25
 */

namespace App\Handlers;


use App\DAO\RoleDAO;
use Illuminate\Support\Facades\Lang;


class RoleHandler extends BaseHandler
{
    protected function handle()
    {

        $roleDao = new RoleDAO();
        $roles = $roleDao->findAll()->toArray();
        if (empty($roles)){
            $this->addError(Lang::trans('message.api.roles.error'));
        }
        $this->setData($roles);

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