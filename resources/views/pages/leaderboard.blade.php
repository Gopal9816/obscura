@extends('layouts.app')

@section('content')
<div class="row leaderboard">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#away">Away</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="home">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">College</th>
                <th scope="col">Level</th>
                <th scope="col">Points</th>
            </tr>
        </thead>
        <tbody>
            @if(count($homeusers) > 0)
                @foreach($homeusers as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->level }}</td>
                        <td>{{ $user->points }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    </div>
    <div id="away" class="tab-pane fade">
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">College</th>
                            <th scope="col">Level</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($awayusers) > 0)
                            @foreach($awayusers as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->college }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>{{ $user->points }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
    </div>
</div>
</div>
@endsection