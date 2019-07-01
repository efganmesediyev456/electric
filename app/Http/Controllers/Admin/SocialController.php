<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lng;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socials = Social::withTrashed()->groupBy('u_id')->paginate();
        $socials->load('lng');
        return view('admin.socials.index', ['socials' => $socials]);
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
        return view('admin.socials.create', ['lngs' => $lngs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $lngs = Lng::all();
        $lastUid = Social::withTrashed()->orderBy('u_id', 'desc')->first();
        if ($lastUid == null) {
            $uid = 1;
        } else $uid = $lastUid->u_id + 1;

        $input = $request->except('_token');
        $file = $request->icon;
        $file->move('images', $file->getClientOriginalName());
        $input['u_id'] = $uid;
        $input['icon'] = $file->getClientOriginalName();

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
            $social= new Social($input);
            $social->save();
        }

        return redirect()->route('admin.socials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lngs = Lng::all();
        $lngs->load('socials');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('socials')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newSocial = Social::select()->where('u_id',$id)->first();
            $newSocialArray = collect($newSocial->toArray())->only(['u_id','icon'])->toArray();
            $newSocialArray['l_id']=$lid->u_id;
            $social  = new Social($newSocialArray);
            $social->save();
        }
        $socials = Social::select()->where('u_id',$id)->get();
        return view('admin.socials.edit',['socials'=>$socials,'lngs'=>$lngs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $socials = Social::select()->where('u_id', $id)->get();
        if(is_uploaded_file($request->icon)){
            $file = $request->icon;
            $file->move('images', $file->getClientOriginalName());
            $input['icon'] = $file->getClientOriginalName();
        }
        $attrs = $request->all();
        $ats = array_keys($attrs);
        foreach ($socials as $social) {
            for ($i = 0; $i < count($ats); $i++) {
                if (count(explode($social->l_id, $ats[$i])) > 1) {
                    $attr = explode($social->l_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }
            }
            $social->update($input);
        }
        return redirect()->route('admin.socials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $socials = Social::select()->where('u_id',$id)->get();
        foreach ($socials as $social){
            $social->delete();
        }
        return redirect()->route('admin.socials.index');
    }
    public function forceDelete($id){

        $status = Social::withTrashed()->where('u_id',$id)->forceDelete();
        if($status)
            return redirect()->route('admin.socials.index')->withFlashSuccess('Silindi');
        return redirect()->route('admin.socials.index')->withDangerSuccess('Sehv bas verdi');
    }


    public function restore($id){
        Social::withTrashed()->where('u_id',$id)->restore();
        return redirect()->route('admin.socials.index');
    }
}
