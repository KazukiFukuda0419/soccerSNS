<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
    $data = ['msg'=>'これはbladeを利用したサンプルです。'];
    return view('bulletin.index',$data);
    }
    
    public function add(Request $request)
    {
        return view('hello.add');
    }
    
    public function create(Request $request)
    {
        $param = [
           'name' => $request->name,
           'comment' => $request->comment,
        ];
        DB::insert('insert into people (name,comment) values (:name,:comment)',$param);
        
        return redirect(hello);
    }
}
