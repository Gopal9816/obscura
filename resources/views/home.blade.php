@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header text-center">
        <h1 >Welcome {{ $user->name }}</h1>
    </div>
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DASHBOARD</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;">DETAILS</h4>
                    <div class="btn-group pull-right">
                        <a class="btn btn-success editb" href="/edit">Edit</a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>COLLEGE&nbsp&nbsp&nbsp{{ $user->college }}</li>
                        <li>LEVEL&nbsp&nbsp&nbsp{{ $user->level }} </li>
                        <li>EMAIL&nbsp&nbsp&nbsp{{ $user->email }}</li>
                        <li>MOBILE&nbsp&nbsp&nbsp{{ $user->phnumber }}</li>

                    </ul>
                </div>
                <div id="overlay animated fadeInUp"></div>

            </div>
        </div>
    </div>
    </div>
@endsection
