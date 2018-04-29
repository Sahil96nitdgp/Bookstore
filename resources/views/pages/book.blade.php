
@extends('layouts.nav')

@section('content')
    @include('layouts.messages')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="../storage/cover_images/{{$book->cover_image}}" alt="No img" width="100%" height="450px" class="img-responsive img-rounded"><br>
                <button class="btn btn-lg" style="width:1.75in; background-color :orange"><i class="fa fa-shopping-bag"></i> Buy Now</button>
                <button class="btn btn-lg" style="width:1.75in; background-color :goldenrod"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>

            </div>

            <div class="col-md-8">
                <h1 style="font-size : 50px"><b>{{$book->title}}</b></h1>
                <div class="row">
                    <div class="col-md-6">
                        <small><small><h3>-{{$book->author}}</h3></small></small>
                        <h3><strong style="background-color :lawngreen"> &nbsp{{$book->rating}}&nbsp<span class="glyphicon glyphicon-star"  style="color:black"></span></span></strong> 
                            {{$book->genre}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <strong style="font-size :30px"><i class="fa">&#xf156;</i> {{$book->price}}</strong>
                        </h3>
                    </div>
                </div>

                
                <h2><strong>Description</strong></h2>
                <p>{{$book->description}}</p>
                <hr>

                @if(session('session_admin_login')!= null)
                    <a href="/iandwe/public/admin/{{$book->book_id}}/edit" class="btn btn-primary btn-lg">Edit</a><br/>
                    <br>
                    {!! Form::model($book, array('route' => array('admin.destroy', $book->book_id), 'method' => 'DELETE')) !!}
                        {{Form::submit('Delete', ['class' => 'btn btn-lg btn-danger'] )}}
                    {!! Form::close() !!}

                    <br>
                @endif
                

            </div>
        </div>
    </div>

@endsection
        


    