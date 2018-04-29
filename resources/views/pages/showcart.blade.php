@extends('layouts.nav')

@section('content')

    <div class="container">
        <h1>My Cart</h1>

        @if(count($results) > 0)
            @foreach($results as $result)
                <div class="well">
                    <h3>{{$result->title}}</h3>
                    {{$result->description}}
                </div>
            @endforeach
        @else
            <h3>No Items To Display!</h3>
        @endif
    </div>

@endsection