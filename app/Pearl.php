<?php

namespace App;

use App\Video;
use Illuminate\Database\Eloquent\Model;

class Pearl extends Model
{
    public function links()
    {
    	return $this->belongsToMany('App\Pearl');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function videos()
    {
    	return $this->belongsToMany('App\Video');
    }
}
