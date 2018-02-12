@extends('layouts.app')

@section('content')

<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev3.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
   
    <img src="../img/level8.jpg" class="img-responsive" style="z-index: 4; height:75vh;width:75vh">
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
