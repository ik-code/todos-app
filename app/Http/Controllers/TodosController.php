<?php

namespace App\Http\Controllers;

use App\Models\Todos;


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
        $this->validate( request(), [
            'name' => 'required|unique:todos|max:255',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = new Todos();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/todos');
    }
    public function edit($todo_id){
        $todo = Todos::find($todo_id);
        return view('todos.edit')->with('todo',  $todo);
    }
    public function update($todo_id){
        $this->validate( request(), [
            'name' => 'required|unique:todos|max:255',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = Todos::find($todo_id);
        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();
        return redirect('/todos');
    }
}
