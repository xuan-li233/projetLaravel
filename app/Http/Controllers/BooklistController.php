<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Booklist;


class BooklistController extends Controller
{
    public function index(){
        $booktable = DB::table('booklist')->get();
        return view('booklist',['booktable' => $booktable]);
    }
    public function insert(Request $request) {
        $list = new Booklist();
        $list->name = $request->input('name');
        $list->author = $request->input('author');


        $list->save();
//        dd($list);
        $booktable = DB::table('booklist')->get();
        return view('/booklist',['booktable' => $booktable]);
    }
    public function update($id, Request $request){
        $list = \App\Booklist::find($id);
        $list->name = $request->input('rename');
        $list->author = $request->input('reauthor');
        $list->save();
        return redirect('/booklist');



    }
    public function delete($id){
        $list = \App\Booklist::find($id);
        $list->delete();
        return redirect('/booklist');
    }

}
