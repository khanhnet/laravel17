<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events=Event::all();
        //dd($events);
        return view('event',compact('events'));//compact đưa biến sang view
    }
    public function create()
    {
        return view('add');
    }
     public function store(Request $request)
    {
        unset($request->_token);
        //dd($request->all());
        Event::create($request->all());
        return redirect(route('events.index'));
    }
    public function edit($id)
    {
        $event=Event::find($id);
        return view('edit',compact('event','id'));
    }
    public function update(Request $request,$id)
    {
        Event::find($id)->update($request->all());
        return redirect(route('events.index'));
    }
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect(route('events.index'));
    }
}
