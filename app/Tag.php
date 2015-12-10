<?php

namespace ZMS;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public $timestamps = false;

    public function posts() {
    	return $this->belongsToMany('ZMS\Post');
    }
}
