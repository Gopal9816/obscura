@extends('layouts.app')

@section('content')

<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev3.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <img src="../img/wrong.jpeg" class="img-responsive" style="z-index: 4; height:75vh;">
    <br><br>
</div>
<script>
    window.setTimeout(function(){ window.location = "/game"; },5000);
</script>


@endsection