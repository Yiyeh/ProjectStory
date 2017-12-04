<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

	protected $fillable = [
			'body', 'votes'
	];

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function story(){
		return $this->belongsTo(Story::class);
	}
}
