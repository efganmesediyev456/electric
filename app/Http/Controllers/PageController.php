<?php

namespace App\Http\Controllers;

use App\Lng;
use App\Menu;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageController extends SiteController
{
    //
    public function page($lng, $page){
        if($page =='search') return redirect()->route('search',[$lng, Input::get('query')]);
        $this->template = 'site.page';
        $lang = Lng::select()->where('short_name', $lng)->first();
        if (!$lang) abort(404);

        $advert = Menu::select()->where(['l_id' => $lang->u_id, 'url_tag' => $page])->first();
        $this->vars['seo'] = $advert;
        $this->vars['advert'] = $advert;
        if(!$advert) abort(404);

        $randNewses = News::select()->where('l_id',$lang->u_id)->orderByRaw('RAND()')->take(6)->get();
        $this->vars['randNewses'] = $randNewses;
        return $this->renderOutput($lng);
    }
}
