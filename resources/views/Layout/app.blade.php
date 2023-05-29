<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventory management website</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/HomePage/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/HomePage/slider/slick.css')}}">

</head>
<body>
@include('Layout.header')
    @yield('content')
@include('Layout.footer')
<script src="{{'js/bootstrap/bootstrap.bundle.min.js'}}"></script>
<script src="{{'js/bootstrap/jquery-3.7.0.js'}}"></script>
<script src="{{'js/Slider/slick.js'}}"></script>
<script src="{{'js/Slider/slick-control.js'}}"></script>

</body>
</html>
