<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Lng;
use App\Menu;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends SiteController
{
    public function index($lng, $query){
        //$query = Input::get('query');
        $this->template = 'site.search';
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $menu = Menu::select()->where(['l_id'=>$lang->u_id, 'url_tag'=>'news'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;


        $adverts = News::select()->where('l_id', $lang->u_id)->where('title','like','%'.$query.'%')->paginate(8);
        $adverts->load('user');
        $this->vars['adverts'] = $adverts;
        return $this->renderOutput($lng);
    }
}
