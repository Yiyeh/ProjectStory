<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
    		'title', 'votes'
    ];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function segments(){
    	$this->hasMany(Segment::class);
    }
}
