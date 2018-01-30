@extends('layouts.app')

@section('content')
<h1>Register New</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['route' => ['register',$id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('college','College')}}
                {{Form::text('college','',['class' => 'form-control','placeholder' => 'College'])}}
            </div>
            <div class="form-group">
                    {{Form::label('phno','Phone Number')}}
                    {{Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number'])}}
            </div>
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection()