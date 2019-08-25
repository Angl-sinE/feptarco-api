<?php

namespace App\DAO;
use App\Model\User;

/**
 *  Database transaccion logic resides here
 */
class UserDAO extends BaseDAO
{
    protected $class = User::class;

}
