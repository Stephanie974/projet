@include('header')

<body style="background-color: rgba(171, 148, 126);">
    <div>
        <div class="row">

            <div class="col-lg-11">

                <h2>index.blade.php</h2>

            </div>

            <div class="col-lg-3">
                <a class="btn btn-success" href="{{ url('commande/create') }}">Ajouter</a>
            </div>

        </div>

        @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

        @endif



        <table class="table table-bordered">

            <tr>

                <th>Numéro</th>
                <th>Nom du produit</th>
                <th>Couleur</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Actions</th>

            </tr>

            @foreach ($commandes as $index => $commande)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $commande->nom }}</td>
                <td>{{ $commande->prenom }}</td>
                <td>{{ $commande->company }}</td>
                <td>{{ $commande->fortune }}</td>
                <td>

                    <form action="{{ url('commande/'. $commande->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('commande/'. $commande->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('commande/'. $commande->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

            @endforeach
        </table>


        @include('footer')