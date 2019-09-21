<?php

namespace App\Http\Controllers\API;


use App\Handlers\AuthModule\LoginHandler;
use App\Handlers\AuthModule\PasswordQuickResetHandler;
use App\Handlers\AuthModule\PasswordResetExecute;
use App\Handlers\AuthModule\PasswordResetFindHandler;
use App\Handlers\AuthModule\PasswordResetHandler;
use App\Handlers\AuthModule\RegisterHandler;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Lang;

class AuthController extends ApiController
{
    /**
     * Registers the user
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function registerUser(Request $request)
    {

        $handler = new RegisterHandler($request->all());
        $handler->processHandler();

        if ($handler->isSuccess()){
        return  self::apiResponseCreatedNoData(Lang::trans('message.api.success.register.user'));
        }
        return self::apiResponseError($handler->getErrors());

    }

    /**
     * Login user and creates the access token
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function login(Request $request)
    {
        $handler = new LoginHandler($request->all());
        $handler->processHandler();

        if ($handler->isSuccess()){
            return  self::apiResponseAccepted(Lang::trans('message.api.success.login'), $handler->getData());
        }
        return self::apiResponseUnauthorized($handler->getErrors());
    }

    /**
     * Logout user, revokes the access token
     * @param Request $request
     * @return mixed
     */
    public function logout(Request $request){

        if (isset($request)){
            $request->user()->token()->revoke();
            return self::apiResponseOK(Lang::trans('message.api.success.logout'), $request->user());
        }
        else{
            return self::apiResponseUnauthorized(['errors' =>Lang::trans('message.api.error.logout')]);
        }
    }

    /**
     * Checks the logged user
     * @param Request $request
     * @return mixed
     */
    public function check(Request $request)
    {
        if ($request->user()){
            return self::apiResponseOK(Lang::trans('message.api.success.logout'), $request->user());
        } else{
            return self::apiResponseUnauthorized(['errors' =>Lang::trans('message.api.auth.error')]);
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function createPasswordReset(Request $request)
    {
        $handler = new PasswordResetHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return  self::apiResponseOK(Lang::trans('message.api.password.reset.email.success'), $handler->getData());
        }
        return self::apiResponseError(Lang::trans('message.api.password.reset.email.error'));
    }

    /**
     * @param $token
     * @return mixed
     */
    public function findPasswordReset($token)
    {
        $handler = new PasswordResetFindHandler('Token',['token' =>$token]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return  self::apiResponseOK(Lang::trans('message.password.reset.token.success'), $handler->getData());
        }
        return self::apiResponseError(Lang::trans('message.api.password.reset.token.error'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function executePasswordReset(Request $request)
    {
        $handler = new PasswordResetExecute($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK(Lang::trans('message.api.password.reset.password.success'), $handler->getData());
        }
        return self::apiResponseError(Lang::trans('message.api.password.reset.password.error'));
    }

    public function executePasswordQuickReset(Request $request)
    {
        $handler = new PasswordQuickResetHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.password.reset.password.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }
}
