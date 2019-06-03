<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todos=Todo::all();
    	//dd($todos);
    	return view('todo',compact('todos'));//compact đưa biến sang view
    }
    public function create()
    {
    	return view('add');
    }
     public function store(Request $request)
    {
    	unset($request->_token);
        Todo::create($request->all());
        return redirect(route('todos.index'));
    }
    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('edit',compact('todo','id'));
    }
    public function update(Request $request,$id)
    {
        Todo::find($id)->update($request->all());
        return redirect(route('todos.index'));
    }
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect(route('todos.index'));
    }
}
