@extends('layouts.admin_nav')

@section('content')
    <div class="container">
    <h1>EDIT BOOKS</h1>
    <div class="col-md-6 col-xs-offset-2">
            {!! Form::model($book, array('route' => array('admin.update', $book->book_id), 'method' => 'PUT')) !!}

            <div class="form-group">
                {{Form::label('title', 'Title: ')}}
                {{Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('author', 'Author: ')}}
                {{Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => 'Author'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'Price: ')}}
                {{Form::number('price', $book->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
            </div>

            <div class="form-group">
                {{Form::label('rating', 'Rating: ')}}
                {{Form::number('rating', $book->rating, ['class' => 'form-control', 'placeholder' => 'Rating(0-5)'])}}
            </div>

            <div class="form-group">
                {{Form::label('genre', 'Genre: ')}}
                {{Form::text('genre', $book->genre, ['class' => 'form-control', 'placeholder' => 'Genre'])}}
            </div>

            <div class="form-group">
                {{Form::label('description', 'Book Description: ')}}
                {{Form::textarea('description', $book->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            <center>{{Form::submit('SAVE CHANGES', ['class' => 'btn btn-lg btn-primary'])}}</center><br>
        {!! Form::close() !!}
    </div>
    <div class="col-md-3">
        <br>
        @include('layouts.messages')
    </div>
@endsection