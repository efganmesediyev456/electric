<?php

namespace App\Http\Controllers;

use App\Lng;
use App\Menu;
use App\News;
use Illuminate\Http\Request;

class NewsController extends SiteController
{
    //

    public function index($lng){
        $this->template = 'site.news.index';
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $menu = Menu::select()->where(['l_id'=>$lang->u_id, 'url_tag'=>'news'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        $newses = News::select()->where('l_id',$lang->u_id)->paginate(5);
        $this->vars['newses'] = $newses;
        $randNewses = News::select()->where('l_id',$lang->u_id)->orderByRaw('RAND()')->take(6)->get();
        $this->vars['randNewses'] = $randNewses;

        return $this->renderOutput($lng);
    }
}
