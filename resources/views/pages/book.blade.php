
@extends('layouts.nav')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="http://fotologimg.s3.amazonaws.com/photo/7/20/92/returns_saiyans/1252692154209_f.jpg" alt="No img" width="100%" height="450px"><br><br>
                <button class="btn btn-lg" style="width:1.75in; background-color :orange"><i class="fa fa-shopping-bag"></i> Buy Now</button>
                <button class="btn btn-lg" style="width:1.75in; background-color :goldenrod"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>

            </div>

            <div class="col-md-8">
                <h1 style="font-size : 50px"><b>{{$book->title}}</b></h1>
                

            </div>
        </div>
    </div>

@endsection
        


    