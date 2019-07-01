<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\General;
use App\Lng;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::select()->groupBy('u_id')->paginate();
        $abouts->load('lng');
        return view('admin.abouts.index',['abouts'=>$abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $lngs->load('about');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('abouts')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newAbout = About::select()->where('u_id',$id)->first();
            $newAboutArray = collect($newAbout->toArray())->only(['u_id'])->toArray();
            $newAboutArray['l_id']=$lid->u_id;
            $newAbout  = new About($newAboutArray);
            $newAbout->save();
        }
        $abouts = About::select()->where('u_id',$id)->get();
        return view('admin.abouts.edit',['abouts'=>$abouts,'lngs'=>$lngs]);
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
        $about = About::select()->where(['u_id'=>$id,'l_id'=>$request->l_id])->first();
        $input = $request->except('_token');

        $about->update($input);
        return redirect()->route('admin.abouts.index');
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
