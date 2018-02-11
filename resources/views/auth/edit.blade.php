@extends('layouts.app')

@section('content')

<div class=row>
    <div class="col-md-10 col-xs-12 col-md-offset-1 ">

    {!! Form::open(['action' => ['HomeController@update',$user->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno',$user->phnumber,['class' => 'form-control','placeholder' => 'Phone Number',])}}
        </div>
        
        <div class="form-group">
                {{Form::label('college','College')}}
                {{Form::text('college',$user->college,['class' => 'form-control','placeholder' => 'College',])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
    {!! Form::close() !!}
    </div>
</div>
@endsection