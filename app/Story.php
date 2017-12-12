<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
    		'user_id','tag_id', 'title', 'intro', 'votes'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function segments(){
    	return $this->hasMany(Segment::class);
    }

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
