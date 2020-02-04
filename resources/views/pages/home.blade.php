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
    <div class="card">
        <div class="card-body">
            <div class="content" style="text-align: center;">
                <div class="title m-b-md">
                    Telefoonboek
                </div>

                <div class="links">
                    <p>Bovenaan in de navbar kunt u zichzelf in het telefoonboek registreren.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop