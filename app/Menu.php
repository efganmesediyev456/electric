<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{

    use SoftDeletes;
    //
    protected $fillable = ['text','bg_image','l_id','u_id','sub_id','ordering','title','description','keyword','name','text','url_tag','picture'];


    public function lng(){
         return $this->belongsTo('App\Lng','l_id','u_id');
    }
}
