<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //
    use SoftDeletes;

    public $table = 'books';

    protected $fillable = ['name', 'path','l_id','u_id'];

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }

}
