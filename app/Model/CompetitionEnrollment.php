<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompetitionEnrollment extends Model
{
    protected $table = 'competition_enrollments';

    protected $fillable = ['archer_id', 'competition_id', 'status', 'payment_invoice', 'payment_amount', 'updated_by'];

    const STATUS_ENROLLED = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_REJECTED = 2;

    public function competition()
    {
        return $this->belongsTo("App\Model\Competition");
    }

    public function archer()
    {
        return $this->belongsTo("App\Model\ArcherProfile");
    }

    public function updated_by()
    {
        return $this->belongsTo("App\Model\User");
    }

}
