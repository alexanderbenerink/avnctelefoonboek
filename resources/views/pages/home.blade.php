@extends('layouts.master')

@section('title')
<title>Home</title>

@section('main')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="jumbotron">
        <h1 class="display-4">Telefoonboek</h1>
        <p class="lead">Klik op "Telefoonboek beheren" in de navigatiebalk bovenaan om het telefoonboek te beheren.</p>
        <hr class="my-4">
        <p>Of klik de knop hieronder</p>
        <p class="lead">
            <a class="btn btn-primary" href="{{ url('/telefoon_boeks') }}" role="button">Telefoonboek beheren</a>
        </p>
    </div>
</div>

@stop