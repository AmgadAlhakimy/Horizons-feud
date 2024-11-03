<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/all.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

    <title></title>
</head>
<body>
@livewire('main-page')
<img  class=" cards_img" src="{{URL::asset('images/1.png')}}" alt="skills"/>
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('/socket.io/socket.io.js')}}"></script>
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('js/FamilyFeud.js')}}"></script>
</body>
</html>
