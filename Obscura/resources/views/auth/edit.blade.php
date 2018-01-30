@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => ['HomeController@update',$user->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('college','College')}}
            {{Form::text('college',$user->college,['class' => 'form-control','placeholder' => 'College',])}}
        </div>
        <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno',$user->phnumber,['class' => 'form-control','placeholder' => 'Phone Number',])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection