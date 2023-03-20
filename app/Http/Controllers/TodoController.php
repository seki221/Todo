<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('layouts.index', compact('todos'),['txt' => 'フォームを入力']);
    }
    public function create()
    {
        return view('layouts.create');
    }
    
    public function store(TodoRequest $request)
    {
        
        // $form = $request->all();
        // Todo::create($form);
        // return redirect()->route('layouts.create', ['id' => 0]);


        $todo = new Todo();
        $todo->content = $request->input('content');
        $todo->save();

        return redirect()->route('home');
    
    }

    public function edit(TodoRequest $request, $id)
    {
        $todo=Todo::find($id);
        $todo->content = $request->input('content');
        $todo->save();

        return
        redirect()->route('home');
    }

    // public function update($id)
    // {
    //     $todo = Todo::find($id);
    //     // $id->save();
    //     // dd($todo);

    //     // リダイレクトの生成
    //     return redirect()->route('/layouts.update', ['id' => 1]);
    // }


    // public function delete(todo $request)
    // {
    //     $todo = Todo::find($request->id);
    //     dd($todo);
    //     $todo->delete();

    //     return view('delete',[$todo->id]);
    // }


    // public function remove(Request $request)
    // {
    //     Todo::find($request->id)->delete();
    //     return redirect()->route('home');
    // }




    // public function destroy($id)
    // {
    //     // Booksテーブルから指定のIDのレコード1件を取得
    //     $todo = Todo::find($id);
    //     // レコードを削除
    //     $todo->delete();
    //     dd('aa');
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('home');
    // }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        // レコードを削除
        $todo->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('home');
    }

    public function post(TodoRequest $request)
    {
        return view('home', ['txt' => '正しい入力です']);
    }

    
}