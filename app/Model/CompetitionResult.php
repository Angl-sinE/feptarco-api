<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 6/09/2019
 * Time: 22:52
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompetitionResult extends Model
{
    protected $table = 'competition_results';
    const UNCONFIRMED_RESULT = 0;
    const CONFIRMED_RESULT = 1;

    protected $fillable = ['status', 'mode', 'category','competition_id','round','points'];

    public function competition()
    {
        return $this->belongsTo("App\Model\Competition");
    }

    public function athletes()
    {
        return $this->belongsToMany(ArcherProfile::class,'athlete_competition_results','competition_result_id','athlete_id');
    }


}
