<?php

namespace App\Http\Controllers;

use App\Book;
use App\Lng;
use App\Menu;
use Illuminate\Http\Request;
use Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class BooksController extends SiteController
{
    //

    public function index($lng){
        $this->template = 'site.books.index';
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $menu = Menu::select()->where(['l_id'=>$lang->u_id, 'url_tag'=>'e-books'])->first();
        $this->vars['seo'] = $menu==null?new Menu():$menu;

        $books = Book::select()->where('l_id',$lang->u_id)->paginate(10);
        $this->vars['books'] = $books;

        return $this->renderOutput($lng);
    }

    public function read($lng, $name){
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $book = Book::select()->where(['name'=>$name, 'l_id'=>$lang->u_id])->first();
        return Redirect::to(route('home').'/books/'.$book->path);
    }

    public function download($lng, $name){
        $lang = Lng::select()->where('short_name',$lng)->first();
        if(!$lang) abort(404);

        $book = Book::select()->where(['name'=>$name, 'l_id'=>$lang->u_id])->first();
        return Response::download('books/'.$book->path, $book->name);

    }
}
