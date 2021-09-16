@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van Joanne Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball.</p>

    <div class="container">
        <div class="div-left">
            <div class="up">
                <h3>Aantal opkomende toernooien:</h3>
                <h4>5</h4>
            </div>
            <div class="bottom">
                <h3>Totaal aantal teams:</h3>
                <h4>26</h4>
            </div>
        </div>

        <div class="div-right">
            <div class="whole">
                <img src="{{ asset('img/snitch.png') }}" alt="snitch">
            </div>
        </div>
    </div>
@endsection
