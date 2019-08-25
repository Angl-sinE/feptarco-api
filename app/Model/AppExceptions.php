<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppException extends Model
{
    protected $table = 'app_exceptions';

    protected $fillable = [
        'number', 'code', 'file', 'line', 'message',
        'trace',
    ];
}
