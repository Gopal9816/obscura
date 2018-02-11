@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
    <div class="row">
        <div class="col-md-6 col-xs-12"> <img src="../img/kudu1.jpg" style="z-index: 4;height:40vh;width:75%"></div>   
        <div class="col-md-6 col-xs-12"> <img src="../img/kudu2.jpg" style="z-index: 4;height:40vh;width:75%"></div> 
      </div>
    <br>
      <div class="row">
        <div class="col-md-6 col-xs-12"> <img src="../img/kudu3.jpg" style="z-index: 4;height:40vh;width:75%"></div>   
        <div class="col-md-6 col-xs-12"> <img src="../img/kudu4.png" style="z-index: 4;height:40vh;width:75%"></div> 
      </div>  
   
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
