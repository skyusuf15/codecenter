<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer', 'upvotes', 'downvotes',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
