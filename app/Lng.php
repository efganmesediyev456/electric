<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lng extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = ['u_id', 'org_name', 'short_name','icon', 'default', 'ordering'];

    public function menus(){
        return $this->hasMany('App\Menu','l_id','u_id');
    }

    public function newses(){
        return $this->hasMany('App\News','l_id','u_id');
    }

    public function advertisements(){
        return $this->hasMany('App\Advertisement','l_id','u_id');
    }

    public function books(){
        return $this->hasMany('App\Book','l_id','u_id');
    }

    public function sliders(){
        return $this->hasMany('App\Slider','l_id','u_id');
    }

    public function generals(){
        return $this->hasMany('App\General','l_id','u_id');
    }

    public function abouts(){
        return $this->hasMany('App\About','l_id','u_id');
    }

    public function socials(){
        return $this->hasMany('App\Social','l_id','u_id');
    }

    public function teams(){
        return $this->hasMany('App\Team','l_id','u_id');
    }

    public function categories(){
        return $this->hasMany('App\Category','l_id','u_id');
    }
}
