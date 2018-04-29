@extends('layouts.admin_nav')

@section('content')

    <div class="container col-md-5 col-xs-offset-3">
        <h2>Admin Login</h2>
        @include('layouts.messages')

        {!! Form::open(['action' => 'AdminController@login', 'method' => 'get' ]) !!}

            <div class="form-group">
                {{Form::label('email', 'Email: ')}}
                {{Form::email('email', '', ['class' => 'form-control form-group', 'placeholder' => 'Enter Email'])}}
            </div>

            <div class="form-group">
                {{Form::label('password', 'Password: ')}}
                {{Form::password('password', '', ['class' => 'form-control form-group', 'placeholder' => 'Password'])}}
            </div>

            {{Form::hidden('_method', 'POST')}}
            <center>{{Form::submit('Login', ['class' => 'btn btn-lg btn-primary'])}}</center><br>
        {!! Form::close() !!}
        
    </div>

</body>
</html>
@endsection