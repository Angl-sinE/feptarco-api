<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 11/10/2018
 * Time: 22:13
 */

namespace App\Http\Controllers\API;



use App\Handlers\RoleHandler;
use Illuminate\Http\Request;


class RoleController extends ApiController
{

    /**
     * Returns a list of all roles
     * @param Request $request
     * @return mixed
     */
    public function roles(Request $request)
    {

        $handler = new RoleHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('List Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());
    }


    public function create(Request $request)
    {


    }

    public function update(Request $request , $id)
    {

    }

    public function delete(Request $request, $id)
    {

    }

}
