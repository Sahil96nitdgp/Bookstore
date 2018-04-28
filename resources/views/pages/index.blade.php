
@extends('layouts.nav')

@section('content')
        <div class="container">
            
                <div class="row">

                    <div class="col-md-2">
                        <h1>Books</h1>
                        Filters to be added
                    </div>
    
                    <div class="col-md-10">
                        
                        @if(count($books) > 0)
                            @foreach($books as $book)
                                <div class="col-md-3">
                                    <div class="well well-sm" style="background-color :azure">
                                        <img src="../resources/assets/images/hp.jpg" alt="" width="187" height="240">
                                        
                                        <div class="row" style="color :black">
                                            <div class="col-md-12"><strong>{{$book->title}}</strong></div>
                                            
                                        </div>
                                        <div class="row" style="color :black">
                                            <div class="col-md-8">
                                                    <small>-{{$book->author}}</small>
                                            </div>
                                            <div class="col-md-4"><p>{{$book->genre}}</p></div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5" style="font-size:20px"><strong  ><i class="fa">&#xf156;</i> {{$book->price}}</strong> </h4></div>
                                            <div class="col-md-7" style="font-size: 17px">
                                                <strong>{{$book->rating}}</strong><span class="glyphicon glyphicon-star"  style="color:salmon"></span>&nbsp&nbsp
                                                <button class="btn btn-sm btn-link" style="background-color :coral"> 
                                                    <a href="/iandwe/public/books/{{$book->book_id}}" style="color:black"><strong>VIEW</strong></a>
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
        


    