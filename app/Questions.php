<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'upvotes', 'downvotes',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
