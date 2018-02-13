@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<link href="{{ asset('css/lev4.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    <p id="rhyme"style="font-size:25px">
        The Mad tea party was lit AF<br>
        The Hatter,the Dormouse and the March hare<br>
        were sipping imaginary wine of their silverware.<br>
        waiting for a friend that made them complete.<br><br>


        The Hatter <br>
	    A man with great dexterity,born in late winter/north remembers<br><br>


        The Dormouse<br>
    	The one who never gets any action,in Love with Fish bladders and almonds.<br><br>


        The March Hare	<br>
	    Just wants his voice to be heard,a descendant of the Mu Civilisation is Light as a feather.<br><br>


        Beer is the answer, what was the question
    </p>
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