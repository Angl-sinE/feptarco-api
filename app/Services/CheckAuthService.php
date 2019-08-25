<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 21/01/2019
 * Time: 20:36
 */

namespace App\Services;
use Illuminate\Support\Facades\Auth;


class CheckAuthService
{
    /**
     * @return bool
     */
    public static function check(){
        $check = Auth::user();
        return  isset($check) ? true: false;
    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public static function getAuthUser(){
        $user = Auth::user();
        return  isset($user) ? $user: null;
    }

}



