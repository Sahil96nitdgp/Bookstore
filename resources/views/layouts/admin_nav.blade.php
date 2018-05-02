<!DOCTYPE html>
<html>
	<head>
		<title>{{config('app.name', 'IandWE') }}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

	</head>


	<body style="color:black; background-image: url('http://backgroundcheckall.com/wp-content/uploads/2017/12/light-yellow-background-hd-3.jpg'); background-size :cover">
        <nav class="navbar navbar-inverse navbar-static-top" >
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/iandwe/public/admin/dashboard" style="color :beige"><strong>{{config('app.name', 'IandWE') }}</strong></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;

                        <li><a href="/iandwe/public/admin/dashboard"> Dashboard </a></li>
                        <li><a href="/iandwe/public/books"> View Books </a></li>
                        <li><a href="/iandwe/public/admin/create"> Add Book </a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/iandwe/public/admin/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </body>
</html>