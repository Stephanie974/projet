{{-- @extends('layouts.app')
@section('content') --}}
@include('header')

<body style="background-color: rgba(134, 199, 237);">
    <h1>edit.blade.php</h1>


    @if ($errors->any())

    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>

    @endif

    <form method="post" action="{{ url('commande/'. $commande->id) }}">
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom"
                value="{{ $commande->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="prenom">Couleur:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom"
                value="{{ $commande->prenom }}">
        </div>

        <div class="form-group mb-3">

            <label for="company">Quantité:</label>
            <input type="text" class="form-control" id="company" placeholder="Entrer Company" name="company"
                value="{{ $commande->company }}">

        </div>

        <div class="form-group mb-3">

            <label for="fortune">Prix :</label>
            <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune"
                value="{{ $commande->fortune }}">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

    @include('footer')
    {{-- @endsection --}}