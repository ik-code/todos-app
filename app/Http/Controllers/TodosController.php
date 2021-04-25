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
}
