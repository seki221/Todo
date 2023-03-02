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
    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $todos = Todo::find($request->id);
        return view('edit', ['form' => $todos]);
    }
    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
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