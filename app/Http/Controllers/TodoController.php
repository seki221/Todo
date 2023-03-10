<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::select('created_at', 'content')->get();
        // dd('Todo');
        
        return view('index', ['todos' => $todos]);
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
        dd('$aa');
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