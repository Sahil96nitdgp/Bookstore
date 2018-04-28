
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
                                <div class="col-md-4">
                                    <div class="well well-sm" style="background-color :azure">
                                        <h3><strong>{{$book->title}}</strong></h3>
                                        <img src="../resources/assets/images/Goku.png" alt="" width="180" height="240">
                                        <p>{{$book->description}}</p>
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
        


    