@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <h1 id="rhyme">All the work we did to make this look good. I bet it's worth something</h1>
    <br>
    <div style="display:none;" id="lookie_here"> https://drive.google.com/open?id=1hUtpY4CXUrOrLjmcvWQLEExO4YX4ORaH</div>
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