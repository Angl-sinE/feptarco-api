<?php

namespace App\Http\Controllers\API;

use App\Handlers\InventoryModule\RegisterInventoryHandler;
use App\Handlers\InventoryModule\UpdateInventoryHandler;
use App\Handlers\InventoryModule\CheckInventoryHandler;
use App\Handlers\InventoryModule\DeleteInventoryHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class InventoryController extends ApiController
{
    
    /**
     * Registers items in the inventory
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $handler = new CheckInventoryHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
             return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseInternalError($handler->getErrors());
    }

    /**
     * Registers items in the inventory
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        $handler = new RegisterInventoryHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.gear.register.success'));
        }
        return self::apiResponseInternalError($handler->getErrors());
    }

    /**
     * Updates an item on the inventory
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id){

        $handler = new UpdateInventoryHandler($request->all(), ['id' => $id]);
        $handler->processHandler();
        
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.gear.update.success'));
        }
        return self::apiResponseInternalError($handler->getErrors());
    }


    /**
     * Deletes an item on the inventory
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function delete(Request $request, $id)
    {
        $handler = new DeleteInventoryHandler($request->all(),['id'=>$id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.gear.delete.success'));
        }
        return self::apiResponseInternalError($handler->getErrors());
        
    }


}
