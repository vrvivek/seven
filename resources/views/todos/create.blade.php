@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDos</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h1>What Next You Need To-Do</h1>
                    <form action="/todo/create" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-6">
                                <input type="text" name="title" id="title" class='form-control'>
                            </div>
                            <input type="submit" value="Create" class='btn btn-secondary offset-1 col-3 '>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
