
@extends('layouts.nav')

@section('content')
        <div class="container">
            <h1>Books</h1>
            <div class="row">

                    <div class="col-md-2">
    
                        
                    </div>
    
                    <div class="col-md-10">
                        
                        @if(count($books) > 0)
                            @foreach($books as $book)
                                <div class="col-md-3">
                                    <div class="well well-sm" style="background-color :azure">
                                        <img src="../resources/assets/images/Goku.png" alt="" width="187" height="240">
                                        
                                        <div class="row" style="color :black">
                                            <div class="col-md-8">
                                                <h3><strong>{{$book->title}}</strong> </h3>
                                                
                                            </div>
                                            <div class="col-md-4"><br><p>{{$book->genre}}</p></div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5" style="font-size:20px"><strong  ><i class="fa">&#xf156;</i> {{$book->price}}</strong> </h4></div>
                                            <div class="col-md-7">
                                                <strong>{{$book->rating}}</strong><span class="glyphicon glyphicon-star"  style="color:salmon"></span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <button class="btn btn-sm" style="background-color :coral"> 
                                                    <a href="" style="color:black"><strong>View</strong></a>
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
        


    