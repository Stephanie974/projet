@extends('layouts.app')

@section('content')

@include('header')
extend
@guest
@if (Route::has('login'))

<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

@endif

@if (Route::has('register'))

<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

@endif
@else

<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>

<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
@endguest
<main class="py-4">
    @yield('content')
</main>

<a href="{{ url('/') }}" class="btn bg-danger hover-zoom">Retour</a>

@include('footer') --}}