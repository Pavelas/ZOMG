<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'winner_id', 'oponnent_id', 'token'
    ];

    public function winner()
    {
    	return $this->hasOne('App\Clip', 'id', 'winner_id');
    }

    public function oponnent()
    {
    	return $this->hasOne('App\Clip', 'id', 'oponnent_id');
    }
}
