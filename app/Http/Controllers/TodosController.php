<?php

namespace App\Http\Controllers;

use App\Models\Todos;


class TodosController extends Controller {
    public function index() {
        return view( 'todos.index' )->with( 'todos', Todos::all() );
    }
    public function show(Todos $todo) {
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

        session()->flash('success', 'Todo created successfully');

        return redirect('/todos');
    }
    public function edit(Todos $todo){
        return view('todos.edit')->with('todo',  $todo);
    }
    public function update(Todos $todo){
        $this->validate( request(), [
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->update();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }
    public function destroy(Todos $todo){
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');
    }
    public function complete(Todos $todo){
        $todo->completed = true;
        $todo->update();

        session()->flash('success', 'Todo completed successfully');

        return redirect('/todos');
    }
}
