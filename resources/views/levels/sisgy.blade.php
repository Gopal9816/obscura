@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
        <h1 id="rhyme-new" >OH DO!</h1>
        <h1 id="rhyme-new" >INDULGE an IDIOSYNCRASY</h1>
        <h1 id="rhyme-new" >make BULLETS of LEAD</h1>
        <h1 id="rhyme-new" >Reconcile DOG to CAT</h1>
        <h1 id="rhyme-new" >Lay KNIFE by FORK</h1>
        <h1 id="rhyme-new" >CONVERSE CHEERFULLY</h1>
        <h1 id="rhyme-new" >WEDNESDAY AFTERNOON</h1>
        <h1 id="rhyme-new" >COOK the DINNER</h1>
        <h1 id="rhyme-new" >SPREAD the BANQUET</h1>
        <h1 id="rhyme-new" >DEMAND a CORMORANT</h1>
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