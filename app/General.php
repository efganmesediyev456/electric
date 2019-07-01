<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    //

    protected $fillable = ['l_id','u_id','phone','email','address','image'];

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }
}
