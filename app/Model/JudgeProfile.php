<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JudgeProfile extends Model
{
    protected $table = 'judge_profiles';
    protected $fillable = [
        'first_names', 'last_names', 'current_address','phone_number', 'age', 'employment', 'birth_date', 'civil_status', 'status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

}
