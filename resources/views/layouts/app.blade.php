<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Theme Made By www.fredesk.com - Copyright 2016 -->

    <title>Weddingscanner - @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Head section for scripts and css stylesheets -->

    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    @section('head')
    @show


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

@include('sections.nav')

@yield('content')

@include('sections.footer')

@section('footer')
@show

</body>
</html>
