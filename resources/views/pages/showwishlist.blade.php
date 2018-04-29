@extends('layouts.nav')

@section('content')

    <div class="container">
        <h1>My Wishlist</h1>

        @if(count($results) > 0)
            @foreach($results as $result)
                <div class="well">
                    <h3>{{$result->title}}</h3>
                    {{$result->description}}
                </div>
            @endforeach
        @else
            <h3>No Items To in the wishlist!</h3>
        @endif
    </div>

@endsection