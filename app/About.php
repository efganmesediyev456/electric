<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

    protected $fillable = ['l_id','u_id','title','description'];

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }
}
