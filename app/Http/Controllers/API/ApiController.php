<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 30/09/2018
 * Time: 19:51
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{

    /**
     * Status code variable
     * @var int
     */
    public static $statusCode = Response::HTTP_OK;

    /**
     * Returns status code
     * @return int
     */
    protected static function getStatusCode()
    {
        return self::$statusCode;
    }

    /**
     * Sets the status code
     * @param $code
     * @return $this
     */
    protected static function setStatusCode($code)
    {
       return self::$statusCode = $code;

    }

    /**
     * Returns the default JsonResponse to be used in the controllers
     * @param $data
     * @param array $headers
     * @return mixed
     */
    protected static function apiResponse($data = [], $headers = []){
        return new JsonResponse($data,self::getStatusCode(),$headers);

    }


    /**
     * Returns test response
     * @return JsonResponse
     */
    protected static function test()
    {
        return new JsonResponse('Feptarco API is ok');

    }


    /**
     * Returns response for bad request 400
     * @param $message
     * @return mixed
     */
    protected static function apiResponseError($message)
    {
        self::setStatusCode(Response::HTTP_BAD_REQUEST);
        return self::apiResponse([
            'status' => 'error',
            'status_code' => self::getStatusCode(),
            'message' => $message,
        ]);
    }

    /**
     * Returns response for created 201
     * @param $message
     * @param null $data
     * @return mixed
     */
    protected static function apiResponseCreated($message , $data = null){

        self::setStatusCode(Response::HTTP_CREATED);
        return self::apiResponse([
            'status' => 'success',
            'status_code' =>  self::getStatusCode(),
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Returns response for created 201 with no data value
     * @param $message
     * @return mixed
     */
    protected static function apiResponseCreatedNoData($message) {
        self::setStatusCode(Response::HTTP_CREATED);
        return self::apiResponse([
            'status' => 'success',
            'status_code' =>  self::getStatusCode(),
            'message' => $message
        ]);
    }

    /**
     * Returns response for 200 ok
     * @param $message
     * @param array $data
     * @return mixed
     */
    protected static function apiResponseOK($message, $data = null){

        self::setStatusCode(Response::HTTP_OK);
        return self::apiResponse([
            'status' => 'success',
            'status_code' => self::getStatusCode(),
            'message' => $message,
            'data' => $data
        ]);
    }


    /**
     * Returns response for accepted 202
     * @param $message
     * @param array $data
     * @return mixed
     */
    protected static function apiResponseAccepted($message, $data = null){

        self::setStatusCode(Response::HTTP_ACCEPTED);
        return self::apiResponse([
            'status' => 'success',
            'status_code' => self::getStatusCode(),
            'message' => $message,
            'data' => $data
        ]);
    }



    /**
     * Reponse for not found 404
     * @param string $message
     * @return mixed
     */
    protected static function apiResponseNotFound($message){
        self::setStatusCode(Response::HTTP_NOT_FOUND);
        return self::apiResponse([
            'status' => 'error',
            'status_code' => self::getStatusCode(),
            'message' => $message,
        ]);
    }

    /**
     * Reponse for not unauthorized 401
     * @param  $message
     * @return mixed
     */
    protected static function apiResponseUnauthorized($message){
        self::setStatusCode(Response::HTTP_UNAUTHORIZED);
        return self::apiResponse([
            'status' => 'error',
            'status_code' => self::getStatusCode(),
            'message' => $message,
        ]);
    }

    /**
     * Returns response for unprocesable entity 422
     * @param $errors
     * @return mixed
     */
    protected static function apiResponseValidationError($errors){
        self::setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
        return self::apiResponse([
            'status' => 'error',
            'status_code' => self::getStatusCode(),
            'error' => $errors
        ]);
    }

    /**
     * Returns response for interal error 500
     * @param $message
     * @param $errors
     * @return mixed
     */
    protected static function apiResponseInternalError($errors){
        return self::apiResponse([
            'status' => 'error',
            'status_code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            'error' => $errors
        ]);
    }


    /**
     * Returns  success response with pagination
     * @param Paginator $paginate
     * @param $data
     * @param $message
     * @return mixed
     */
    protected static function apiResponseWithPagination(Paginator $paginate, $data, $message){
        $data = array_merge($data, [
            'paginator' => [
                'total_count'  => $paginate->total(),
                'total_pages' => ceil($paginate->total() / $paginate->perPage()),
                'current_page' => $paginate->currentPage(),
                'limit' => $paginate->perPage(),
            ]
        ]);
        return self::apiResponse([
            'status' => 'success',
            'status_code' => Response::HTTP_OK,
            'message' => $message,
            'data' => $data
        ]);
    }
}