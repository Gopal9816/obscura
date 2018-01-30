@extends('layouts.app')

@section('content')


<div class="col-md-6 col-md-offset-3" align="center">
    <audio controls>
        <source src="{{ asset('audio/level2.wav') }}" type="audio/wav">

    </audio>
</div>
<br><br>
<div class="col-md-6 col-md-offset-3">        
    {!! Form::open(['action' => 'GameController@answer', 'method' => 'POST']) !!}
        <div class="form-group" align="center">
            {{Form::label('answer','Answer')}}
            {{Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])}}
        </div>
    {{Form::submit('Submit',['class' => 'btn btn-success'])}}
{!! Form::close() !!}
</div>







@endsection