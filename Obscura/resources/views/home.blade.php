@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header text-center">
        <h1>Welcome {{ $user->name }}</h1>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
    </div> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title" style="padding-top: 7.5px;">Details</h4>
                    <div class="btn-group pull-right">
                        <a class="btn btn-success" href="/edit">Edit</a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>College : {{ $user->college }}</li>
                        <li>Level : {{ $user->level }} </li>
                        <li>E-mail : {{ $user->email }}</li>
                        <li>Mobile : {{ $user->phnumber }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
