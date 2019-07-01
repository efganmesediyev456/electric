<?php

namespace App\Http\Controllers;

use App\Lng;
use App\Menu;
use Illuminate\Http\Request;

class ContactOtherController extends SiteController
{
    //

    public function index($lng)
    {
        $this->template = 'site.cothers.index';
        $lang = Lng::select()->where('short_name', $lng)->first();
        if (!$lang) abort(404);

        $menu = Menu::select()->where(['l_id' => $lang->u_id, 'url_tag' => 'contact-other'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        return $this->renderOutput($lng);
    }
}
