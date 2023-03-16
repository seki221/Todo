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
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $todo=Todo::find($request->id);
        
        return view('edit',['content'=>'$content']);
    }
    
    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->content)->update($form);
        return redirect('edit');
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