@extends('layout.master')
@section('title','Amar Circle-Team')
@section('layout.contant')

    <section class="team-area ptb-100">
        <div class="container">
            @foreach($team_members as $team_member )
            <div class="single-team-member">
                <div class="member-image">
                    <img src="{{asset('storage/'.$team_member->photo)}}" alt="image">
                </div>
                <div class="member-content">
                    <h3>{{$team_member->name}}</h3>
                    <span>{{$team_member->designation}}</span>
                    <ul class="info">
                        <li><span>Experience:</span>{{$team_member->experience}}</li>
                        <li><span>Phone:</span> {{$team_member->phone}}</li>
                        <li><span>E-mail:</span> {{$team_member->email}}</li>
                        <li><span>Location:</span> {{$team_member->location}}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>

    </section>


@endsection
