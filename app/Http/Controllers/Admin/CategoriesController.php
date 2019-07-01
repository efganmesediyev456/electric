<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Lng;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socials = Category::select()->groupBy('u_id')->paginate();
        $socials->load('lng');
        return view('admin.categories.index', ['cats' => $socials]);
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
        return view('admin.categories.create', ['lngs' => $lngs]);
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
        $lastUid = Category::select()->orderBy('u_id', 'desc')->first();
        if ($lastUid == null) {
            $uid = 1;
        } else $uid = $lastUid->u_id + 1;

        $input['u_id'] = $uid;

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
            $cat= new Category($input);
            $cat->save();
        }

        return redirect()->route('admin.categories.index');
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
        $lngs->load('categories');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('categories')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newCategory = Category::select()->where('u_id',$id)->first();
            $newCategoryArray = collect($newCategory->toArray())->only(['u_id'])->toArray();
            $newCategoryArray['l_id']=$lid->u_id;
            $cat  = new Category($newCategoryArray);
            $cat->save();
        }
        $cats = Category::select()->where('u_id',$id)->get();
        return view('admin.categories.edit',['cats'=>$cats,'lngs'=>$lngs]);
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
        $cats = Category::select()->where('u_id', $id)->get();

        $attrs = $request->all();
        $ats = array_keys($attrs);
        foreach ($cats as $cat) {
            for ($i = 0; $i < count($ats); $i++) {
                if (count(explode($cat->l_id, $ats[$i])) > 1) {
                    $attr = explode($cat->l_id, $ats[$i])[0];
                    $input[$attr] = $attrs[$ats[$i]];
                }
            }
            $cat->update($input);
        }
        return redirect()->route('admin.categories.index');
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
        $cats = Category::select()->where('u_id',$id)->get();
        foreach ($cats as $cat){
            $cat->delete();
        }
        return redirect()->route('admin.categories.index');
    }
}
