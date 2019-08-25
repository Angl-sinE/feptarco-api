<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    protected $table = 'clubs';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
     public function archerProfile()
    {
       return $this->hasOne('App\Model\ArcherProfile');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */

    public function trainerProfile()
    {
        return $this->hasOne('App\Model\TrainerProfile');
    }
}
