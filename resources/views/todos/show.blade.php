@extends('layouts.app')
@section('title')
    {{$todo->name}}
    @endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center m-5">{{$todo->name}} </h3>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h5 class="text-center">Details</h5></li>
                    <li class="list-group-item">{{ $todo->description }}</li>
                    <li class="list-group-item text-center">
                        <a href="/todos" type="button" class="btn btn-primary btn-sm">Go Back</a>
                        <a href="/todos/{{ $todo->id }}/edit" type="button" class="btn btn-info btn-sm">Edit</a>
                        <a href="/todos/{{ $todo->id }}/delete" type="button" class="btn btn-danger btn-sm">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
