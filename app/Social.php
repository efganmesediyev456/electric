<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['l_id','u_id','icon','link'];

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }
}
