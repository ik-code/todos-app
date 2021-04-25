<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <title>Todo Item</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center m-5">{{$todo->name}} </h3>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h5 class="text-center">Details</h5></li>
                    <li class="list-group-item">{{ $todo->description }}</li>
                    <li class="list-group-item text-center"><a href="/todos" type="button"
                                                   class="btn btn-primary btn-sm">Go Back</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
