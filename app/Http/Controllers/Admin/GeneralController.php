<?php

namespace App\Http\Controllers\Admin;

use App\General;
use App\Lng;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $generals = General::select()->groupBy('u_id')->paginate();
        $generals->load('lng');
        return view('admin.generals.index',['generals'=>$generals]);
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
        return view('admin.generals.create',['lngs'=>$lngs]);
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
        $lastUid = General::select('u_id')->orderBy('u_id','desc')->first();
        if($lastUid == null){
            $uid = 1;
        } else $uid=$lastUid->u_id+1;

        $input = $request->except('_token');
        $file = $request->image;
        $file->move('images',$file->getClientOriginalName());
        $input['u_id'] = $uid;
        $input['image'] = $file->getClientOriginalName();

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
            $general= new General($input);
            $general->save();
        }

        return redirect()->route('admin.generals.index');
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
        //
        $lngs = Lng::all();
        $lngs->load('generals');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('generals')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newGeneral = General::select()->where('u_id',$id)->first();
            $newGeneralArray = collect($newGeneral->toArray())->only(['u_id','image'])->toArray();
            $newGeneralArray['l_id']=$lid->u_id;
            $general  = new General($newGeneralArray);
            $general->save();
        }
        $generals = General::select()->where('u_id',$id)->get();
        return view('admin.generals.edit',['generals'=>$generals,'lngs'=>$lngs]);
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
        $generals = General::select()->where('u_id',$id)->get();


        $image_path = public_path()."/images/".$generals->first()->image;
        if(\File::exists($image_path)) {
            \File::delete($image_path);
        }
//        $image_name=uniqid().'.'.$file->getClientOriginalExtension();
        if(is_uploaded_file($request->image)){
            $file = $request->image;
            $file->move('images', $file->getClientOriginalName());
            $input['image'] = $file->getClientOriginalName();
        }



        $attrs = $request->all();
        $ats = array_keys($attrs);
        foreach ($generals as $general) {
            for ($i = 0; $i < count($ats); $i++) {
                if (count(explode($general->l_id, $ats[$i])) > 1) {
                    $attr = explode($general->l_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }
            }
            $general->update($input);
        }
        return redirect()->route('admin.generals.index');
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
    }
}
