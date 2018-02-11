@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <h2 id="rhyme" class="text-center">
        You're <a class="new-sel">s</a>tuck <a class="new-sel">i</a>n front of a creature, no weapon, you gotta say the secret te<a class="new-sel">xt</a>. <br />Hmm, what do <a class="new-sel">y</a>ou do now?<br /><a class="new-sel">Fi</a>ne how about we make this <a class="new-sel">ve</a>ry simple for you?
        <br>
    </h2>
    <img src="../img/jwy.png" style="z-index: 4;height:30vh;">
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
