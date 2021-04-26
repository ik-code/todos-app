@extends('layouts.app')
@section('title')
    Todos
    @endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center m-5">Todo list</h3>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach( $todos as $todo)
                        <li class="list-group-item">{{$todo->name}}

                            @if(!$todo->completed)
                                <a href="/todos/{{ $todo->id }}/complete" type="button" class="btn btn-warning btn-sm float-right">Complete</a>
                                @endif

                            <a href="/todos/{{ $todo->id }}" type="button" class="btn btn-primary btn-sm float-right mr-2">View</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
