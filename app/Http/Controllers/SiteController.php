<?php

namespace App\Http\Controllers;

use App\About;
use App\Advertisement;
use App\General;
use App\Lng;
use App\Menu;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use MenuB;

class SiteController extends Controller
{
    //

    protected $template;


    protected $vars = array();

    public function renderOutput($lng = null){

        if($lng==null){
            $lng = Lng::select()->where('default',1)->first();
            App::setLocale($lng->short_name);
        } else App::setLocale($lng);
        $l_id = Lng::select()->where('short_name',App::getLocale())->first();

//        $lngs = Lng::all();

        $generals = General::select()->where('l_id',$l_id->u_id)->first();

//        $socials = Social::select()->where('l_id', $l_id->u_id)->get();
        $menus = $this->getMenu($l_id);
        $topbar = view('site.index.topbar',['generals'=>$generals, 'menus'=>$menus->roots()])->render();
        $this->vars['topbar'] = $topbar;

        //*******
        $generalVar = General::select()->where('l_id',$l_id->u_id)->first();
        $general = view('site.index.general_header',['general'=>$generalVar==null?new General():$generalVar])->render();
        $this->vars['general'] = $general;
        //****************
//        $menus = $this->getMenu($l_id);
//        $menu = view('site.index.menu',['menus'=>$menus->roots()])->render();
//        $this->vars['menu'] = $menu;
        //******
        $about_us = About::select()->where('l_id',$l_id->u_id)->first();
//        $ads = Advertisement::select()->where('l_id',$l_id->u_id)->take(5)->get();
        $footer = view('site.index.footer',['general'=>$generalVar==null?new General():$generalVar,
            'about'=>$about_us==null?new About():$about_us]);
        $this->vars['footer'] = $footer;

        $services=view('site.index.services')->render();
        $this->vars['services']=$services;

        $team=view('site.index.team')->render();
        $this->vars['team']=$team;

        $news=view('site.index.news')->render();
        $this->vars['news']=$news;

//        $test=view('site.index.test')->render();
//        $this->vars['test']=$test;


        return view($this->template)->with($this->vars);
    }

    private function getMenu($lng){
        $menus = Menu::select()->where('l_id',$lng->u_id)->orderBy('ordering')->get();

        $mBuilder = MenuB::make('nav', function($m) use ($menus, $lng){
           foreach ($menus as $menu){
               if($menu->sub_id == 0){
                   $m->add($menu->name, route('home').'/'.$lng->short_name.'/'.$menu->url_tag)->id($menu->u_id);
               } else {
                   if($m->find($menu->sub_id)){
                       $m->find($menu->sub_id)->add($menu->name, route('home').'/'.$lng->short_name.'/'.$menu->url_tag)->id($menu->u_id);
                   }
               }
           }
        });

        return $mBuilder;
    }
}
