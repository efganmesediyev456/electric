<?php

namespace App\Http\Controllers;

use App\Lng;
use App\Menu;
use Illuminate\Http\Request;

class MembershipController extends SiteController
{
    //

    public function show($lng){
        $this->template = 'site.membership.index';
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $menu = Menu::select()->where(['l_id'=>$lang->u_id, 'url_tag'=>'membership'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        return $this->renderOutput($lng);
    }
}
