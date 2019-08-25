<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/10/2018
 * Time: 22:54
 */

namespace App\Http\Controllers\API;


use App\Handlers\AthleteModule\AthleteHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class AthleteController extends ApiController
{
    public function index(Request $request)
    {


        if ($request->user()){
            $handler = new AthleteHandler($request->method(),$request->all(),null);
            $handler->processHandler();
            if ($handler->isSuccess()){
                return self::apiResponseOK('Ok', $handler->getData());
            }
            return self::apiResponseError($handler->getErrors());
        }
        else
            return self::apiResponseUnauthorized(Lang::trans('message.api.auth.error'));

    }

}