<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todos::all();
        $todos = [
            'content' => '本文',
        ];

        return view('index',$todos);
    }
    // 追記：ここから
    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function post(Request $request)
    {
        $content =$request->content;
        $todos = todos::find($request->input);
        $date = [
            'todos' => $todos,
            'input' => $request->input

        ];
        
    }
    
}

