@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron text-center">
            <h1 align="center" id="obtitle">Obscura</h1>
            <br>
            @guest
            <p>
                <a href="/login/google" style="color:white;"><button id="google" class=btn><i class="fa fa-google">  Google</i></button></a>
                <a href="/login/facebook" style="color:white;"><button id="facebook" class=btn><i class="fa fa-facebook">  Facebook</i></button></a>
            </p>
            @else
            <p>
                The game begins soon!!
            </p>
            @endguest
    </div>
</div>
@endsection