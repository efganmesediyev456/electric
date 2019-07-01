<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Lng;
use App\Menu;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::withTrashed()->orderBy('u_id')->groupBy('u_id')->paginate(5);
        $menus->load('lng');

        return view('admin.menus.index', ['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menus = Menu::select()->groupBy('u_id')->get();
        $lngs = Lng::all();
        return view('admin.menus.create',['menus'=>$menus,'lngs'=>$lngs]);
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
        $lngs = Lng::all();
        $lastUid = Menu::withTrashed()->orderBy('u_id','desc')->first();
        if($lastUid == null){
            $uid = 1;
        } else $uid=$lastUid->u_id+1;
        $input['u_id'] = $uid;

        $file = $request->picture;
        $file->move('images',$file->getClientOriginalName());
        $input['picture'] = $file->getClientOriginalName();
        //*******************
        $file = $request->bg_image;
        $file->move('images',$file->getClientOriginalName());
        $input['bg_image'] = $file->getClientOriginalName();
        $input['sub_id'] = $request->sub_id;

        $attrs = $request->except('sub_id', 'picture', 'bg_image');
        $ats = array_keys($attrs);

        foreach ($lngs as $lng){
            $input['l_id'] = $lng->u_id;
            for($i = 0; $i<count($ats); $i++){
                if(count(explode($lng->u_id,$ats[$i]))>1) {
                    $attr = explode($lng->u_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }

            }
            $menu = new Menu($input);
            $menu->save();
        }

        return redirect()->route('admin.menus.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thisMenus = Menu::select()->groupBy('u_id')->get();

        $lngs = Lng::all();
        $lngs->load('menus');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('menus')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newMenu = Menu::select()->where('u_id',$id)->first();
            $newMenuArray = collect($newMenu->toArray())->only(['u_id', 'sub_id', 'ordering', 'picture','bg_image'])->toArray();
            $newMenuArray['l_id']=$lid->u_id;
            $menu  = new Menu($newMenuArray);
            $menu->save();
        }
        $menus = Menu::select()->where('u_id',$id)->get();
        return view('admin.menus.edit',['menus'=>$thisMenus,'menusL'=>$menus,'lngs'=>$lngs]);
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
        $menus = Menu::select()->where(['u_id'=>$id])->get();
        if(is_uploaded_file($request->picture)){
            $file = $request->picture;
            $file->move('images', $file->getClientOriginalName());
            $input['picture'] = $file->getClientOriginalName();
        }
        if(is_uploaded_file($request->bg_image)){
            $file = $request->bg_image;
            $file->move('images', $file->getClientOriginalName());
            $input['bg_image'] = $file->getClientOriginalName();
        }
        $input['sub_id'] = $request->sub_id;

        $attrs = $request->except('sub_id', 'picture', 'bg_image');
        $ats = array_keys($attrs);
        foreach ($menus as $menu){
            for($i = 0; $i<count($ats); $i++){
                if(count(explode($menu->l_id,$ats[$i]))>1) {
                    $attr = explode($menu->l_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }

            }
            $menu->update($input);
            //$menu->save();
        }

        return redirect()->route('admin.menus.index');
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
        $menus = Menu::select()->where('u_id',$id)->get();
        foreach ($menus as $menu){
            $menu->delete();
        }
        return redirect()->route('admin.menus.index');
    }

    public function forceDelete($id){
        $status = Menu::withTrashed()->where('u_id',$id)->forceDelete();
        if($status)
            return redirect()->route('admin.menus.index')->withFlashSuccess('Silindi');
        return redirect()->route('admin.menus.index')->withDangerSuccess('Sehv bas verdi');
    }

    public function restore($id){
        Menu::withTrashed()->where('u_id',$id)->restore();
        return redirect()->route('admin.menus.index');
    }
}
