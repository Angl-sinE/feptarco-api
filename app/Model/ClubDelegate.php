<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 11/8/19
 * Time: 4:29 PM
 */

namespace App\Model;

class ClubDelegate extends Model
{
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

}