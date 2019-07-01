<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['title','u_id','l_id'];

    public $timestamps = false;


    public function newses(){
        return $this->belongsToMany(News::class,'category_news','category_id','news_id',
            'u_id','u_id');
    }

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','id');
    }
}
