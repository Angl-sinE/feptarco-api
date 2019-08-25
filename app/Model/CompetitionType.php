<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompetitionType extends Model
{
    protected $table = 'competitions_types';

    protected $fillable = ['name', 'details'];

    public function competition()
    {
        return $this->hasOne('App\Model\Competition');
    }
}
