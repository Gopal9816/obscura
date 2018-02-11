@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev5.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <h2 id="rhyme" class="text-center">
        Drop by Drop I bleed a part of me I give away.
        <br>Look closer and you'll see, with you I've been a long way.
        <br>Trapped in Here to be immortalized what am i to say.
        <br>Life is but a dream and You can gently Row Away.
        <br>Or you can stay and find my name and join in,in my story.
        <br>And we will Find.
    </h2>
    <img src="../img/alice.jpeg" style="z-index: 4;height:40vh;">
    <br><br>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
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
