<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
class Handler extends ExceptionHandler
{
    
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {   
        if ((Request::isMethod('post') && $exception instanceof MethodNotAllowedHttpException) ||
            (Request::isMethod('post') && $exception instanceof NotFoundHttpException) ||
            (Request::isMethod('get')  && $exception instanceof MethodNotAllowedHttpException) ||
            (Request::isMethod('get') && $exception instanceof NotFoundHttpException)) {
            return new JsonResponse(['errors' => ['Ruta no encontrada']], 404);
        }

        if ($request->ajax()) {

            return response()->json(['message' => $exception->getMessage()]);
        }

        
        return parent::render($request, $exception);
    }
}
