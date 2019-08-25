<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/
/**********  API Routes ********/
Route::any('test',  'API\AuthController@test');
Route::post('/login', 'API\AuthController@login');



/************ Auth Group Routes **************/
Route::group(['middleware' => 'auth:api'], function(){

/******* REGISTER *******/
Route::post('/register',
    ['uses' => 'API\AuthController@registerUser',
     'middleware' =>'route.access',
     'permissions' => 'register-all' ]);

/********** Roles ************/
Route::get('/roles',
    ['uses' => 'API\RoleController@roles',
    'middleware'=>'route.access',
    'permissions'=>'roles-view']);

/******** CHECK ************/
Route::get(
    '/check',
    ['uses' =>'API\AuthController@check']);

/********* LOGOUT ************/
Route::get(
    '/logout',
    ['uses' => 'API\AuthController@logout']);

/********* PROFILE ROUTES *********/
Route::get(
'/profile',
    ['uses' =>'API\ProfileController@index',
    'middleware' =>'route.access',
    'permissions' =>'profile-view']);

Route::post(
    '/profile/update/{id}',
    ['uses' =>'API\ProfileController@update',
    'middleware' =>'route.access',
    'permissions' =>'profile-edit']);

Route::post(
    '/profile/password/update',
    ['uses' => 'API\ProfileController@passwordUpdate',
     'middleware' =>'route.access',
     'permissions' =>'profile-edit']);

Route::post(
    '/profile/inventory/register',
    ['uses' => 'API\InventoryController@register',
    'middleware' =>'route.access',
    'permissions' =>'profile-gear-create']);

Route::post(
    '/profile/inventory/update/{id}',
    ['uses' => 'API\InventoryController@update',
    'middleware' =>'route.access',
    'permissions' =>'profile-gear-edit']);

Route::post(
    '/profile/inventory/delete/{id}',
    ['uses' => 'API\InventoryController@delete',
    'middleware' =>'route.access',
    'permissions' =>'profile-gear-delete']);

Route::post(
    '/profile/avatar/update',
    ['uses' => 'API\ProfileController@avatarUpdate',
     'middleware' =>'route.access',
     'permissions' =>'profile-edit']);

/******* ATHLETES ROUTES *******/

Route::get(
    '/athletes',
    ['uses' => 'API\AthleteController@index',
    'middleware'=>'route.access',
    'permissions'=>'athletes-view']);


/** INVENTORY ROUTES */
Route::get(
     '/inventory',
     ['uses' => 'API\InventoryController@index',
     'middleware' =>'route.access',
     'permissions' =>'feptarco-inventory-view']);
Route::post(
     '/inventory/update/{id}',
     ['uses' => 'API\InventoryController@update',
     'middleware' =>'route.access',
     'permissions' =>'feptarco-inventory-edit']);

Route::post(
     '/inventory/delete/{id}',
     ['uses' => 'API\InventoryController@delete',
     'middleware' =>'route.access',
     'permissions' =>'feptarco-inventory-delete']);

Route::post(
     '/inventory/register',
     ['uses' => 'API\InventoryController@register',
     'middleware' =>'route.access',
     'permissions' =>'feptarco-inventory-create']);


 /** Competition ROUTES **/
Route::get(
      '/competition/types',
      ['uses' => 'API\CompetitionController@indexType',
      'middleware' =>'route.access',
      'permissions' =>'competition-type-create']);

Route::post(
     '/competition/type/register',
     ['uses' => 'API\CompetitionController@createType',
     'middleware' =>'route.access',
     'permissions' =>'competition-type-create']);

Route::post(
     '/competition/type/update/{id}',
     ['uses' => 'API\CompetitionController@updateType',
     'middleware' =>'route.access',
    'permissions' =>'competition-type-create']);

Route::post(
      '/competition/type/delete/{id}',
      ['uses' => 'API\CompetitionController@deleteType',
      'middleware' =>'route.access',
      'permissions' =>'competition-type-create']);

Route::get(
    '/competitions',
    ['uses' => 'API\CompetitionController@index',
    'middleware' =>'route.access',
    'permissions' =>'competition-registration-view']);

Route::post(
     '/competition/register',
     ['uses' => 'API\CompetitionController@create',
     'middleware' =>'route.access',
     'permissions' =>'competition-registration-create']);

Route::post(
     '/competition/update/{id}',
     ['uses' => 'API\CompetitionController@update',
     'middleware' =>'route.access',
     'permissions' =>'competition-registration-edit']);

Route::post(
     '/competition/delete/{id}',
     ['uses' => 'API\CompetitionController@delete',
     'middleware' =>'route.access',
     'permissions' =>'competition-registration-delete']);

Route::post(
    '/competition/activate/{id}',
    ['uses' => 'API\CompetitionController@activate',
    'middleware' =>'route.access',
    'permissions' =>'competition-registration-confirm']);

Route::post(
     '/competition/enrollment',
     ['uses' => 'API\CompetitionController@enrollmentCreate',
     'middleware' =>'route.access',
     'permissions' =>'competition-enrollment-create']);

Route::post(
      '/competition/enrollment/confirm/{id}',
      ['uses' => 'API\CompetitionController@enrollmentConfirm',
      'middleware' =>'route.access',
      'permissions' =>'competition-enrollment-edit']);

Route::get(
      '/competitions/enrollments',
      ['uses' => 'API\CompetitionController@getEnrollments',
      'middleware' =>'route.access',
      'permissions' =>'competition-enrollments']);

Route::get(
      '/competitions/enrollments/{id}',
      ['uses' => 'API\CompetitionController@getArcherEnrollments',
      'middleware' =>'route.access',
      'permissions' =>'competition-enrollment-view']);

Route::get(
      '/competitions/active',
      ['uses' => 'API\CompetitionController@getArcherCompetitions',
      'middleware' =>'route.access',
      'permissions' =>'competition-enrollment-view']);

/** User ROUTES **/
Route::get(
     '/users',
     ['uses' => 'API\UserController@index',
     'middleware' =>'route.access',
     'permissions' =>'users-view']);

Route::post(
    '/users/delete/{id}',
    ['uses' => 'API\UserController@delete',
    'middleware' =>'route.access',
    'permissions' =>'users-delete']);

Route::post(
    '/users/activate/{id}',
    ['uses' => 'API\UserController@activate',
    'middleware' =>'route.access',
    'permissions' =>'users-edit']);

Route::get(
   '/users/details/{id}',
   ['uses' => 'API\UserController@details',
   'middleware' =>'route.access',
   'permissions' =>'users-edit']);

});


// Reset Password Group Routes //
Route::group([
    'middleware' => 'api',
    'prefix' => 'password'
], function () {
    Route::post('/create', 'API\AuthController@createPasswordReset');
    Route::get('/find/{token}', 'API\AuthController@findPasswordReset');
    Route::post('/reset', 'API\AuthController@executePasswordReset');
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Servicio no encontrado'], 404);
});
