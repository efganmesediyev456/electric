<?php

namespace App\Http\Controllers\Admin;

use App\Advertisement;
use App\Book;
use App\Lng;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::withTrashed()->groupBy('u_id')->paginate();
        $books->load('lng');
        return view('admin.books.index',['books'=>$books]);
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
        return view('admin.books.create',['lngs'=>$lngs]);
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
        $lastUid = Book::withTrashed()->orderBy('u_id','desc')->first();
        if($lastUid == null){
            $uid = 1;
        } else $uid=$lastUid->u_id+1;

        $input = $request->except('_token');
        $file = $request->path;
        $file->move('books',$file->getClientOriginalName());
        $input['u_id'] = $uid;
        $input['path'] = $file->getClientOriginalName();

        foreach ($lngs as $lng){
            if($lng->u_id == $input['l_id']){
                $book = new Book($input);
            } else {
                $book = new Book([
                    'u_id'=>$input['u_id'],
                    'l_id'=>$lng->u_id]);
            }
            $book->save();
        }

        return redirect()->route('admin.books.index');
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
        $lngs->load('news');
        $l_id = Lng::select('u_id')->whereNotIn('u_id', function ($q) use (&$id){
            $q->select('l_id')->from('books')->where('u_id',$id);
        })->get();
        foreach ($l_id as $lid){
            $newBookArray['l_id']=$lid->u_id;
            $book  = new Book($newBookArray);
            $book->save();
        }
        $books = Book::select()->where('u_id',$id)->get();
        return view('admin.books.edit',['books'=>$books,'lngs'=>$lngs]);
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
        $book = Book::select()->where(['u_id'=>$id,'l_id'=>$request->l_id])->first();
       // dd($book);
        $input = $request->except('_token');
        if(is_uploaded_file($request->path)){
            $file = $request->path;
            $file->move('books', $file->getClientOriginalName());
            $input['path'] = $file->getClientOriginalName();
        }

        $book->update($input);
        return redirect()->route('admin.books.index');
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
        $books = Book::select()->where('u_id',$id)->get();
        foreach ($books as $book){
            $book->delete();
        }
        return redirect()->route('admin.books.index');
    }

    public function forceDelete($id){
        $status = Book::withTrashed()->where('u_id',$id)->forceDelete();
        if($status)
            return redirect()->route('admin.books.index')->withFlashSuccess('Silindi');
        return redirect()->route('admin.books.index')->withDangerSuccess('Sehv bas verdi');
    }

    public function restore($id){
        Book::withTrashed()->where('u_id',$id)->restore();
        return redirect()->route('admin.books.index');
    }
}
