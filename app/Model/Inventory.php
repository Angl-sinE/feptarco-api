<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = ['name', 'code', 'brand', 'details', 'quantity','status','asigned_to','crated_by','updated_by','type'];
    const ACTIVE_STATUS = 1;
    const INACTIVE_STATUS = 0;

    public function asigner_user()
    {
        return $this->belongsTo(User::class,'asigned_to');
    }

    public function owner_user()
    {
        return $this->belongsTo(User::class,'owned_by');
    }
}