<?php

namespace App\Http\Controllers\API;
use App\Handlers\CompetitionModule\CheckArcherCompetitionHandler;
use App\Handlers\CompetitionModule\CheckCompetitionHandler;
use App\Handlers\CompetitionModule\DeleteCompetitionHandler;
use App\Handlers\CompetitionModule\ActivateCompetitionHandler;
use App\Handlers\CompetitionModule\UpdateCompetitionHandler;
use App\Handlers\EnrollmentModule\CheckEnrollmentHandler;
use App\Handlers\EnrollmentModule\CheckArcherEnrollmentHandler;
use App\Handlers\EnrollmentModule\ConfirmEnrollmentHandler;
use App\Handlers\EnrollmentModule\CreateEnrollmentHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Handlers\CompetitionModule\CreateCompetitionHandler;
use App\Handlers\CompetitionModule\CreateCompetitionTypeHandler;
use App\Handlers\CompetitionModule\UpdateCompetitionTypeHandler;
use App\Handlers\CompetitionModule\DeleteCompetitionTypeHandler;
use App\Handlers\CompetitionModule\CheckCompetitionTypeHandler;

class CompetitionController extends ApiController
{
    /**
     * Returns all competitions
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $handler = new CheckCompetitionHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());

    }

    /**
     * Creates a competition
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $handler = new CreateCompetitionHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.register.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Updates a registered competition
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $handler = new UpdateCompetitionHandler($request->all(),['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.update.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Activates a competition to enable users to register
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function activate(Request $request, $id)
    {
        $handler = new ActivateCompetitionHandler($request->all(),['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.activate.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function delete(Request $request, $id)
    {
        $handler = new DeleteCompetitionHandler($request->all(), ['id'=> $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.delete.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function indexType(Request $request)
    {
        $handler = new CheckCompetitionTypeHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Creates a competition Type
     * @param Request $request
     * @return mixed
     */
    public function createType(Request $request)
    {
        $handler = new CreateCompetitionTypeHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.type.register.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Updates a competition Type
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateType(Request $request, $id)
    {
        $handler = new UpdateCompetitionTypeHandler($request->all(), ['id'=> $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.type.update.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Deletes (logically) a competition type
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function deleteType(Request $request, $id)
    {
        $handler = new DeleteCompetitionTypeHandler($request->all(), ['id'=> $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.type.delete.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Creates an enrollment for a competition
     * @param Request $request
     * @return mixed
     */
    public function enrollmentCreate(Request $request)
    {
        $handler = new CreateEnrollmentHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.enrollment.register.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Updates the status of an enrollment
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function enrollmentConfirm(Request $request , $id)
    {
        $handler = new ConfirmEnrollmentHandler($request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseCreatedNoData(Lang::trans('message.api.competition.enrollment.confirm.success'));
        }
        return self::apiResponseError($handler->getErrors());
    }


     /**
     * Returns all enrollments
     * @param Request $request
     * @return mixed
     */
    public function getEnrollments(Request $request)
    {
        $handler = new CheckEnrollmentHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());
    }

    /**
     * Returns all enrollments of an archer
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function getArcherEnrollments(Request $request, $id)
    {
        $handler = new CheckArcherEnrollmentHandler($request->all(), ['id' => $id]);
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());

    }

    /**
     * Returns all active competitions
     * @param Request $request
     * @return mixed
     */
    public function getArcherCompetitions(Request $request)
    {
        $handler = new CheckArcherCompetitionHandler($request->all());
        $handler->processHandler();
        if ($handler->isSuccess()){
            return self::apiResponseOK('Ok', $handler->getData());
        }
        return self::apiResponseError($handler->getErrors());
    }
}
