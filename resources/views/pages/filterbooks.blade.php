
@extends('layouts.nav')

@section('content')

    <div class="container">
        
        <div class="row">
            @include('layouts.messages')
    
            <div class="col-md-2">
                <h2><b>Order By</b></h2>
                <strong>
                    <ul style="font-size: 20px">
                        <li><a href="/iandwe/public/books/newToOld" style="color:black">Newest First</a></li>
                        <li><a href="/iandwe/public/books/oldToNew" style="color:black">Oldest First</a></li>
                        <li><a href="/iandwe/public/books/priceLowToHigh" style="color:black">Price Low to High</a></li>
                        <li><a href="/iandwe/public/books/priceHighToLow" style="color:black">Price High to Low</a></li>
                        <li><a href="/iandwe/public/books/mostRated" style="color:black">Most Rated</a></li>
                        <li><a href="/iandwe/public/books" style="color:black">None</a></li>
                    </ul>
                </strong>
            </div>

            <div class="col-md-10">
                
                @if(count($books) > 0)
                    @foreach($books as $book)
                        <div class="col-md-3">
                            <div class="well well-sm" style="background-color :azure">
                                <img src="/iandwe/public/storage/cover_images/{{$book->cover_image}}"  alt="" width="186px" height="250" class="img-rounded">
                                
                                <div class="row" style="color :black">
                                    <div class="col-md-12"><strong>{{$book->title}}</strong></div>
                                    
                                </div>
                                <div class="row" style="color :black">
                                    <div class="col-md-7">
                                            <small>-{{$book->author}}</small>
                                    </div>
                                    <div class="col-md-5"><p>{{$book->genre}}</p></div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-5" style="font-size:16px"><strong  ><i class="fa">&#xf156;</i> {{$book->price}}</strong> </h4></div>
                                    <div class="col-md-7" style="font-size: 17px">
                                        <strong>{{$book->rating}}</strong><span class="glyphicon glyphicon-star"  style="color:salmon"></span>&nbsp&nbsp
                                        <button class="btn btn-sm btn-link" style="background-color :coral"> 
                                            <a href="/iandwe/public/books/{{$book->book_id}}" target="_blank" style="color:black"><strong>VIEW</strong></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>No Books To Display!</h3>
                @endif
                
            </div>
        </div>

    </div>
@endsection
        


    