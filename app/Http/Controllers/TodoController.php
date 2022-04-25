<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todo = Todo::all();
        return view('todo.index',['todo'=>$todo]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'title'=>'required|max:255'
        ]);
        Todo::create([
            'title'=>$request->title,
        ]);

        return redirect('index')->with('success','Todo added successfully');
    }

    public function edit(Request $request,$id)
    {
        $todo = Todo::find($id);
        return view('todo.edit',['todo'=>$todo]);
    }

    public function update(Request $request){
        $request->validate([
            'title'=>'required|max:255'
        ]);
        $todo = Todo::find($request->id);
        $todo->update([
            'title'=>$request->title,
        ]);

        return redirect('index')->with('success','Todo updated successfully');

    }

    public function delete(Request $request,$id)
    {
        $todo = Todo::find($id);

        $todo->delete();
        return redirect('index')->with('success','Todo deleted successfully');

    }

    public function completed(Request $request,$id)
    {
        $todo = Todo::find($id);
        if($todo->completed)
        {
            $todo->update(['completed'=>false]);
            return redirect()->back()->with('success','Todo marked as incomplete');
        }else{
            $todo->update(['completed'=>true]);
            return redirect()->back()->with('success','Todo marked as complete');

        }
    }

}
