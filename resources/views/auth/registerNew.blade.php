@extends('layouts.app')

@section('content')
<style>
  
</style>
<div class="row rym">
<h1 id="heading" align="center">Register New</h1>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
        

        {!! Form::open(['route' => ['register',$id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number','required'])}}
            </div>
           
            <div class="form-group">
                
                {{Form::radio('college','home',false, ['id' => 'home' , 'onchange' => 'hideother()','required'])}}College of Engineering Trivandrum<br>
                {{Form::radio('college','others',false, ['id' => 'other' , 'onchange' => 'displayother()','required'])}}Others
            </div>
            <div class="form-group">
                {{Form::label('collegename','College Name')}}
                {{Form::text('collegename','',['class' => 'form-control','placeholder' => 'College', 'id' => 'inputother'])}}
            </div>
            
            {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection()