<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 20/10/2018
 * Time: 16:32
 */

namespace App\Http\Controllers\API;


use App\Handlers\ProfileModule\PasswordUpdateHandler;
use App\Handlers\ProfileModule\ProfileHandler;
use App\Handlers\ProfileModule\ProfileUpdateHandler;
use App\Handlers\ProfileModule\ProfileAvatarUpdateHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class ProfileController extends ApiController
{
    
    /** 
     * @param Request $request
      * @return mixed
     */
    public function index(Request $request)
    {

        $handler = new ProfileHandler($request->method(),$request->all(),null);
            $handler->processHandler();
            if ($handler->isSuccess()){
                return self::apiResponseOK('Ok', $handler->getData());
            }
            return self::apiResponseError($handler->getErrors());


    }

    /**
     * @param Request $request
     * @param Integer $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {

           $handler = new ProfileUpdateHandler($request->method(),$request->all(), ['id' => $id]);
           $handler->processHandler();
            if ($handler->isSuccess()){
                return self::apiResponseCreatedNoData(Lang::trans('message.api.profile.update.success'));
            }
            return self::apiResponseError($handler->getErrors());
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function passwordUpdate(Request $request)
    {
      $handler = new PasswordUpdateHandler($request->method(),$request->all(),null);
      $handler->processHandler();
      if ($handler->isSuccess()){
          return self::apiResponseOK('OK');
      }
      return self::apiResponseError($handler->getErrors());
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function avatarUpdate(Request $request)
    {
        $handler = new ProfileAvatarUpdateHandler($request->method(),$request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreated(Lang::trans('message.api.profile.avatar.store.success'),$handler->getData());
        }
        return self::apiResponseError($handler->getErrors());

    }

}