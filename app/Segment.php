<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{

	protected $fillable = [
			'body', 'votes'
	];

	public function user(){
		$this->belongsTo(User::class);
	}

	public function story(){
		$this->belongsTo(Story::class);
	}
}
