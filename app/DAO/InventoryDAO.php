<?php
/**
 * Database transaction logic resides here
 * Created by PhpStorm.
 * User: Angel Flores
 * Date: 10/11/2018
 * Time: 15:11
 */

namespace App\DAO;
use App\Model\Inventory;

class InventoryDAO extends BaseDAO
{
    protected $class = Inventory::class;

}