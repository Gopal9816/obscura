@extends('layouts.app')
@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev2.css') }}" rel="stylesheet">
<div class="row rym">
    <div class="col-md-6 col-md-offset-3" align="center">
        <h2 style="font-family:'Amatic SC', cursive;">We start fast and then we go Slow<br>And We All end a winner</h2>
    </div>
<div class="col-md-6 col-md-offset-3" align="center">
    <audio controls>
        <source src="{{ asset('audio/Lavenderisthenewblack.mp3') }}" type="audio/mpeg">

    </audio>
<!--</div>
<br><br>
<div class="col-md-6 col-md-offset-3 lev2" align="center">  -->      
    {!! Form::open(['action' => 'GameController@answer', 'method' => 'POST']) !!}
        <div class="form-group" align="center">
            {{Form::label('answer','Answer')}}
            {{Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])}}
        </div>
    {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
{!! Form::close() !!}
</div>
</div>







@endsection