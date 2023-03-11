<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * 新しいコントローラインスタンスの生成
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * ユーザーの全タスクをリスト表示
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $todos = $request->user()->todos()->get();
        
        return view('layouts.index', ['todos' => $this->forUser($request->user()),]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:255',
        ]);

        // タスクの作成処理…
        $request->user()->todos()->create([
            'nontent' => $request->content,
        ]);

        return redirect('/tasks');
    }
    public function add()
    {
        return view('add');
    }
    public function create(TodoRequest $request)
    {
        Todo::create(['content'=> $request->content]);
        return redirect('/');
    }
    public function edit($id)
    {
        $todos = Todo::find($id);
        return view('edit', ['form' => $todos]);
    }
    public function update(TodoRequest $request, $id)
    {
        if($request->status === null){
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        $todo = Todo::find($id);
        $todo->Todo = $request->input('todo');
        $todo->save();
        } else {
        $todo = Todo::find($id);
        $todo-> status = true;
        $todo-> save();
        }
        return redirect('/');
    }

    public function delete(TodoRequest $request)
    {
        $todos = Todo::find($request->id);
        return view('delete', ['form' => $todos]);
    }

    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

}