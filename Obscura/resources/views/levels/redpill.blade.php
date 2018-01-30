@extends('layouts.app')

@section('content')
<div class ="row">
    
    <h2 id="rhyme" class="text-center">
        Tweedledee and Tweedledum<br>
        Started their started their life as misters <br>
        Years past and a trilogy,<br>
        Ended up as sisters.
        <br>
    </h2>
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
</div>
@endsection