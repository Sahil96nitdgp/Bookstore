@extends('layouts.nav')

@section('content')

    <div class="container">
        <h1>My Wishlist</h1>

        @if(count($results) > 0)
            @foreach($results as $result)
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="../storage/cover_images/{{$result->cover_image}}"  alt="" width="186px" height="250" class="img-rounded">
                        </div>
                        <div class="col-md-7">
                            <h2>{{$result->title}}<br><small> - {{$result->author}}</small></h2>
                            
                            <p>{{$result->description}}</p>
                        </div>
                        <div class="col-md-2">
                            <h3>Price : {{$result->price}}</h3>
                            <h3>Genre : {{$result->genre}}</h3>

                            <button class="btn btn-danger btn-lg"><a href="/iandwe/public/home/removewishlist/{{$result->book_id}}" style="color :cornsilk">Remove From Wishlist</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3>No Items To in the wishlist!</h3>
        @endif
    </div>

@endsection