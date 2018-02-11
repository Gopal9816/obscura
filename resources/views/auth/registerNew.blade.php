@extends('layouts.app')

@section('content')
<style>
  
</style>
<h1 id="heading">Register New</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
        

        {!! Form::open(['route' => ['register',$id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number','required'])}}
            </div>
           
            <div class="form-group">
                
                {{Form::radio('college','home',false, ['id' => 'home' , 'onchange' => 'hideother()','required'])}}Home <br>
                {{Form::radio('college','others',false, ['id' => 'other' , 'onchange' => 'displayother()','required'])}}Others
            </div>
            <div class="form-group">
                {{Form::label('collegename','College Name')}}
                {{Form::text('collegename','',['class' => 'form-control','placeholder' => 'College', 'id' => 'inputother'])}}
            </div>
            
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection()