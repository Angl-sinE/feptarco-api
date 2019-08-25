<?php
/**
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 18/10/2018
 * Time: 21:44
 */

namespace App\DAO;


use App\Model\PasswordReset;

/**
 * Class PasswordResetDAO
 * @package App\DAO
 */
class PasswordResetDAO extends BaseDAO
{

    protected $class = PasswordReset::class;
}