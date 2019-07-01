<?php

namespace App\Http\Controllers\Admin;

use App\Advertisement;
use App\Category;
use App\Http\Controllers\SiteController;
use App\Lng;
use App\Menu;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newses = News::withTrashed()->groupBy('u_id')->paginate();
        $newses->load('lng');
        $newses->load('user');
        return view('admin.news.index',['newses'=>$newses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lngs = Lng::all();
        $categories = Category::select()->where('l_id', Lng::select()->where('default',1)->first()->u_id)->get();
        //dd($categories);
        return view('admin.news.create',['lngs'=>$lngs,'options'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->categories);
        $lngs = Lng::all();
        $lastUid = News::withTrashed()->orderBy('u_id','desc')->first();
        if($lastUid == null){
            $uid = 1;
        } else $uid=$lastUid->u_id+1;

        //$input = $request->except('_token');
        $file = $request->image;
        $file->move('images',$file->getClientOriginalName());
        $input['u_id'] = $uid;
        $input['image'] = $file->getClientOriginalName();
        $input['user_id'] = $request->user_id;
        $input['categories'] = $request->categories;


        $attrs = $request->all();
        $ats = array_keys($attrs);

        foreach ($lngs as $lng){
            $input['l_id'] = $lng->u_id;
            for($i = 0; $i<count($ats); $i++){
                if(count(explode($lng->u_id,$ats[$i]))>1) {
                    $attr = explode($lng->u_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }

            }
            //dd($input);
            $news = new News($input);
            $news->save();
        }

        $news->categories()->attach($input['categories']);
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lng, $url_tag)
    {
        $this->template = 'site.news.show';
        $lang = Lng::select()->where('short_name', $lng)->first();
        if (!$lang) abort(404);

        $menu = Menu::select()->where(['l_id' => $lang->u_id, 'url_tag' => 'news'])->first();
        $this->vars['seo'] = $menu;

        $randNewses = News::select()->where('l_id',$lang->u_id)->orderByRaw('RAND()')->take(6)->get();
        $this->vars['randNewses'] = $randNewses;

        $advert = News::select()->where(['name'=>$url_tag, 'l_id'=>$lang->u_id])->first();
        $this->vars['advert'] = $advert;

        if ($advert) {
            $prevAdvert = News::select()->where([['l_id', '=', $lang->u_id], ['u_id', '<', $advert->u_id]])->first();
            $nextAdvert = News::select()->where([['l_id', '=', $lang->u_id], ['u_id', '>', $advert->u_id]])->first();
            $this->vars['prevAdvert'] = $prevAdvert;
            $this->vars['nextAdvert'] = $nextAdvert;
            $this->vars['seo']['description'] = $advert->description;
            $this->vars['seo']['image'] = $advert->image;
        }

        return $this->renderOutput($lng);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $lngs = Lng::all();
        $lngs->load('newses');
        $categories = Category::select()->where('l_id', Lng::select()->where('default',1)->first()->u_id)->get();
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('newses')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newNews = News::select()->where('u_id',$id)->first();
            $newNewsArray = collect($newNews->toArray())->only(['u_id', 'image','user_id'])->toArray();
            $newNewsArray['l_id']=$lid->u_id;
            $news = new News($newNewsArray);
            $news->save();
        }
        $news = News::select()->where('u_id',$id)->get();
        $news->load('lng');
        return view('admin.news.edit',['newses'=>$news,'lngs'=>$lngs,'options'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $newses = News::select()->where(['u_id' => $id])->get();
        if (is_uploaded_file($request->image)) {
            $file = $request->image;
            $file->move('images', $file->getClientOriginalName());
            $input['image'] = $file->getClientOriginalName();
        }

        $attrs = $request->all();
        $ats = array_keys($attrs);
        foreach ($newses as $news) {
            for ($i = 0; $i < count($ats); $i++) {
                if (count(explode($news->l_id, $ats[$i])) > 1) {
                    $attr = explode($news->l_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }
            }
            $news->update($input);
            //$menu->save();
        }

        $news->categories()->detach();
        if($request->has('categories')){
            $news->categories()->attach($request->categories);
        }
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newses = News::select()->where('u_id',$id)->get();
        foreach ($newses as $news){
            $news->delete();
        }
        return redirect()->route('admin.news.index');
    }

    public function forceDelete($id){
        $status = News::withTrashed()->where('u_id',$id)->forceDelete();
        if($status)
            return redirect()->route('admin.news.index')->withFlashSuccess('Silindi');
        return redirect()->route('admin.news.index')->withDangerSuccess('Sehv bas verdi');
    }

    public function restore($id){
        News::withTrashed()->where('u_id',$id)->restore();
        return redirect()->route('admin.news.index');
    }
}
