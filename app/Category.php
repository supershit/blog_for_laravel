<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //指明于文章的关系，要用
    public function post () {
    	return $this->hasMany('App\Post','cat_id');
    }
}
