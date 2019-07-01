<?php

namespace App\Http\Controllers;

use App\General;
use App\Lng;
use App\Menu;
use App\About;
use Illuminate\Http\Request;

class ContactController extends SiteController
{
    //
    public function index($lng)
    {
        $this->template = 'site.contact';
        $lang = Lng::select()->where('short_name', $lng)->first();
        if (!$lang) abort(404);

        $menu = Menu::select()->where(['l_id' => $lang->u_id, 'url_tag' => 'contact'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        $about = General::select()->where('l_id',$lang->u_id)->first();
        $this->vars['about'] = $about;

        return $this->renderOutput($lng);
    }
}
