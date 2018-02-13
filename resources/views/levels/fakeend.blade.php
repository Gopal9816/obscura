@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev2.css') }}" rel="stylesheet">
<div class="row rym">
    <div>
        <h1 class="rhyme">@dtynxklrptgbln</h1>
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

</div>

<!--  --> 
@endsection