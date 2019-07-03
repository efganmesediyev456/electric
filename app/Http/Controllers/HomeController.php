<?php

namespace App\Http\Controllers;

use App\About;
use App\Lng;
use App\Menu;
use App\News;
use App\Slider;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class HomeController extends SiteController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lng = null)
    {


        $this->template = 'site.index';
        if($lng==null) {
            $lang = Lng::select()->where('default', 1)->first();
        }
        else $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $menu = Menu::select()->where(['l_id'=>$lang->u_id, 'url_tag'=>'/'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        $sliders = Slider::select()->where('l_id',$lang->u_id)->get();
        $sliders->load('lng');
        $slider = view('site.index.sliders',['sliders'=>$sliders])->render();
        $this->vars['slider'] = $slider;
        //*********
        $abouts = About::select()->where('l_id',$lang->u_id)->get();
        $about = view('site.index.abouts',['abouts'=>$abouts])->render();
        $this->vars['about'] = $about;
        //*********************
//        $teamVar = Team::select()->where('l_id',$lang->u_id)->first();
//        $team = view('site.index.team',['team'=>$teamVar]);
//        $this->vars['team'] = $team;
        //*********************
        $newsVar = News::select()->where('l_id',$lang->u_id)->take(3)->get();
        $news = view('site.index.news',['news'=>$newsVar]);
        $this->vars['news'] = $news;
        return $this->renderOutput($lng);
    }

    public function contactUs(Request $request){

        Mail::send('emails.contact',['input'=>$request->all()], function ($message){
            $message->to('vuqar97-97@mail.ru');
        });

        return redirect()->back();
    }

    public function member(Request $request){

       // dd($request->all());
        Mail::send('emails.memail',['input'=>$request->all()], function ($message){
            $message->to('vuqar97-97@mail.ru');
        });

        return redirect()->back();
    }
}
