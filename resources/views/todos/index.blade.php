<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <title>Todos</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center m-5">Todo list</h3>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach( $todos as $todo)
                        <li class="list-group-item">{{$todo->name}} <a href="/todos/{{ $todo->id }}" type="button" class="btn btn-primary btn-sm float-right">View</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>