<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class News extends Model
{
    //
    use SoftDeletes;

    protected $table = 'newses';

    protected $fillable = ['u_id','l_id','title','text','description','user_id','image','name'];

    public function user(){
        return $this->belongsTo('App\Models\Auth\User\User','user_id','id');
    }

    public function lng(){
        return $this->belongsTo('App\Lng','l_id','u_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'category_news','news_id','category_id'
        , 'u_id','u_id');
    }
}
