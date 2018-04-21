<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'url', 'start_time', 'end_time', 'views', 'rating'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}
