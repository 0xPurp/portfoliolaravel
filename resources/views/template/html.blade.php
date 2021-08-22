<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
   <!-- Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

   <!-- Favicon
   ================================================== -->
   <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/apple-touch-icon.png")}}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/img/favicon.png")}}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/colors.css")}}" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    @yield('content')



<script src="{{asset("js/app.js")}}"></script>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.slicknav.min.js")}}"></script>
    <script src="{{asset("assets/js/slick.min.js")}}"></script>
    <script src="{{asset("assets/js/touchswipe.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.slicknav.min.js")}}"></script>
    <script src="{{asset("assets/js/skrollr.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.countTo.min.js")}}"></script>
    <script src="{{asset("assets/js/script.js")}}"></script>

</body>
</html>

