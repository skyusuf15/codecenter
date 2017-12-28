<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avater','level','ranks','total_upvote','total_downvote'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
