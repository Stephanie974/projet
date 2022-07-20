@extends('layouts.app')

@include('header')
@section('content')

<h1>create.blade.php</h1>


@if ($errors->any())

<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

<form action="{{ url('commande') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
    </div>
    <div class="form-group mb-3">
        <label for="prenom">Prénom:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="company">

    </div>
    <div class="form-group mb-3">
        <label for="company">Company:</label>
        <input type="text" class="form-control" id="company" placeholder="Company" name="prenom">

    </div>

    <div class="form-group mb-3">
        <label for="fortune">Fortune ($):</label>
        <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune">
    </div>



    <button type="submit" class="btn btn-primary">Enregister</button>

</form>

{{-- <a href="{{ url('/') }}" class="btn bg-danger hover-zoom">Retour</a> --}}
@include('footer')
@endsection