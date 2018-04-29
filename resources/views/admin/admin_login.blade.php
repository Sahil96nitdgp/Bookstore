<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color :bisque">
    <br><br><br>
    <div class="container" style="background-color :cadetblue">
        <center><h1 style="color :black">Admin Login</h1>
        </center>
        <div class="well well-sm col-md-4 col-xs-offset-4">
            @include('layouts.messages')
    
            {!! Form::open(['action' => 'AdminController@login',  'method' => 'get' ]) !!}
    
                <div class="form-group">
                    {{Form::label('email', 'Email: ')}}<br>
                    {{Form::email('email', '', ['class' => '', 'placeholder' => 'Enter Email'])}}<br>
                </div>
    
                <div class="form-group">
                    {{Form::label('password', 'Password: ')}}<br>
                    {{Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
    
                {{Form::hidden('_method', 'POST')}}
                {{Form::submit('Login', ['class' => 'btn btn-lg btn-primary'])}}<br>
                {!! Form::close() !!}
        </div>
        <br><br><br>
    </div>
    
</body>
</html>
