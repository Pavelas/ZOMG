<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'abbreviation', 'icon', 'image', 'is_popular'
    ];

    public function clips()
    {
    	return $this->hasMany('App\Clip');
    }
}
