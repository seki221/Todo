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
        $url = route('home');
        return view('layouts.index', ['todos' => $todos]);
    }
    
    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect()->route('layouts.create', ['id' => 0]);
    }
    public function store()
    {
        return view('layouts.index');
    }
    public function edit(Request $request,Todo $id)
    {
        $todo=Todo::find($id);
        return view('layouts.update',compact('task'));
    }
    
    public function update($id)
    {
        $todo = Todo::find($id);
        // $id->save();
        // dd($todo);
        
        // リダイレクトの生成
        return redirect()->route('/layouts.update', ['id' => 1]);
    }
    

    public function delete(Request $request)
    {
        
        $todo = Todo::find($request->id);
        return view('delete',[$todo->id]);
    }

    public function remove(Request $request,Todo $todo)
    {
        $this->authorize('destroy', $todo);

        $todo->delete();
        dd($todo);
        // Todo::find($request->id)->delete();
        return redirect('/');
    }

}