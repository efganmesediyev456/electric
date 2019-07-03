<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    //

    use SoftDeletes;

    protected $fillable = ['title', 'description','button_text','button_path','image','l_id','u_id','text_bir','text_iki','text_uc'];

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }
}
