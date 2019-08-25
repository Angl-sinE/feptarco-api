<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 16/03/2019
 * Time: 18:38
 */

namespace App\Http\Controllers\API;
use App\Handlers\UserModule\UserHandler;
use App\Handlers\UserModule\DeleteUserHandler;
use App\Handlers\UserModule\UpdateUserHandler;
use App\Handlers\UserModule\ActivateUserHandler;
use App\Handlers\UserModule\DetailsUserHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;



class UserController extends ApiController
{
    /**
     * Returns all users
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $handler = new UserHandler($request->method(),$request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());


    }

    /**
     * Updates a user
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        $handler = new UpdateUserHandler($request->method(),$request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.user.delete.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Deletes a user
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function delete(Request $request, $id)
    {
        $handler = new DeleteUserHandler($request->method(),$request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.user.delete.success'));
        }
        return self::apiResponseError($handler->getErrors());

    }

    /**
     * Activates a user
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function activate(Request $request, $id)
    {
        $handler = new ActivateUserHandler($request->method(),$request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.user.activate.success'));
        }
        return self::apiResponseError($handler->getErrors());

    }

    /**
     * Returns the user details
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function details(Request $request, $id)
    {
        $handler = new DetailsUserHandler($request->method(),$request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());

    }

}
