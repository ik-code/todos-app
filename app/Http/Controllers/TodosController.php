<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller {
    public function index() {
        return view( 'todos.index' )->with( 'todos', Todos::all() );
    }
    public function show($todo_id) {
        $todo = Todos::find($todo_id);
        return view('todos.show')->with('todo', $todo);
    }
    public function create(){
        return view('todos.create');
    }
    public function store(){
        $data = request()->all();
        $todo = new Todos();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/todos');
    }
}
