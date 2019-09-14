<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArcherProfile extends Model
{
    const GRUPO_PROYECCION = 1;
    const GRUPO_TRABAJO = 2;
    const PRESELECCION = 3;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * @var array
     */
    protected $fillable = [
        'first_names', 'last_names', 'current_address','phone_number', 'age','employment', 'civil_status','status'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function club()
    {
        return $this->belongsTo('App\Model\Club');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id','id');
    }

    public function enrollment()
    {
        return $this->hasOne('App\Model\CompetitionEnrollment');
    }

    public function competitionResults()
    {
        return $this->belongsToMany('\App\Model\CompetitionResults');
    }

}
