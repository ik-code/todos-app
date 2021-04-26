@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Edit Todo</h1>

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/todos/{{ $todo->id }}/update-todo" method="POST">
                @csrf
                <div class="form-group">

                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $todo->name }}">
                </div>
                <div class="form-group">

                    <textarea class="form-control" name="description" id="description" rows="3"
                              placeholder="Description">{{ $todo->description }}</textarea>
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button class="btn btn-success float-left btn-sm" type="submit">Update Todo</button>
                </div>
            </form>
        </div>
    </div>

@endsection
