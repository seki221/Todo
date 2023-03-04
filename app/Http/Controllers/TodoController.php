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
        $todos = Todo::all();
        
        return view('index', ['todos' => $todos]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(TodoRequest $content)
    {
        $form = $content->all();
        Todo::create($form);
        return redirect('/');
    }
    public function edit($id)
    {
        $todos = Todo::find($id);
        return view('edit', ['form' => $todos]);
    }
    public function update(TodoRequest $request, $id)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        $todo = Todo::find($id);
        $todo->name = $request->input('task_name');
        $todo-> save();
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