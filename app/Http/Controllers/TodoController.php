<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('layouts.index', ['todos' => $todos]);
    }
    
    public function add()
    {
        return view('add');
    }
    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        Todo::create(['content'=> $request->content]);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $todos = Todo::find($request -> id);
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

    public function delete(Request $request)
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