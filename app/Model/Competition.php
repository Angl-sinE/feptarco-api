<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = 'competitions';

    const STATUS_REGISTER = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_FINISHED = 2;
    const STATUS_CANCELED = 3;

    protected $fillable = ['annoucement_date', 'start_date','end_date','name','location','coordinates',
        'details','certification_doc','status','type_id', 'admission_price'];

    public function type()
    {
        return $this->belongsTo("App\Model\CompetitionType");
    }

    public function enrollment()
    {
        return $this->hasOne('App\Model\CompetitionEnrollment');
    }

    public function result()
    {
        return $this->hasOne('App\Model\CompetitionResult');
    }
}
