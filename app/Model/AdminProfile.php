<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model

{
    const FEDERATION_OWNED = 1;
    protected $fillable = [
        'first_names', 'last_names', 'current_address','phone_number', 'age', 'employment', 'birth_date', 'civil_status','status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
