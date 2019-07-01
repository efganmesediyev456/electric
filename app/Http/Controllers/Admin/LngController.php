<?php

namespace App\Http\Controllers\Admin;

use App\Lng;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;
use PhpParser\Node\Scalar\LNumber;

class LngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lngs = Lng::withTrashed()->paginate();
        return view('admin.lngs.index',['lngs'=>$lngs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.lngs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->file('icon'));

        $this->validate($request,[
            'short_name'=>'required|unique:lngs,short_name',
            'org_name'=>'required|unique:lngs,org_name'
        ],['unique'=>':attribute artiq istifade olunmusdur']);

        $input = $request->except(['_token']);
        $file = $request->icon;
        $file->move('images', $file->getClientOriginalName());

        $lastUid = Lng::withTrashed()->orderBy('id','desc')->first();
        if($lastUid == null){
            $uid = 1;
        } else $uid=$lastUid->u_id+1;
        $input['u_id'] = $uid;
        $input['icon'] = $file->getClientOriginalName();

        if(isset($input['default'])){
            Lng::select()->where('default',1)->update(['default'=>0]);
        }

        $lng = new Lng($input);
        $lng->save();




        return redirect()->route('admin.lngs.index');
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
        $lng = Lng::find($id);

        return view('admin.lngs.edit',['lng'=>$lng]);
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

        $input = $request->except('_token');
        if(isset($input['default'])){
            $input['default'] = 1;
            Lng::where('default','1')->update(['default'=>'0']);
        } else {
            $input['default'] = 0;
        }

        if(is_uploaded_file($request->icon)){
            $request->icon->move('images', $request->icon->getClientOriginalName());
            $input['icon'] = $request->icon->getClientOriginalName();
        }
        $lng = Lng::find($id);

        $lng->update($input);
        return redirect()->route('admin.lngs.index');

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
        $lng = LNG::find($id);
        $lng->default = 0;
        $lng->save();
        $lng->delete();
        $activatingLng = Lng::select()->first();
        $activatingLng->default = 1;
        $activatingLng->save();
        return redirect()->route('admin.lngs.index');
    }

    public function restore($id){
        Lng::withTrashed()->where('id',$id)->restore();
        return redirect()->route('admin.lngs.index');
    }
}
