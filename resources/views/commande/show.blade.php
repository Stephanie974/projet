@include('header')

<body style="background-color: rgba(134, 199, 237);">
    <h1>show.blade.php</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom du produit :</th>
            <td>{{ $commande->nom }}</td>
        </tr>
        <tr>

            <th>Couleur :</th>
            <td>{{ $commande->prenom }}</td>

        </tr>
        <tr>

            <th>Quantité :</th>
            <td>{{ $commande->company }}</td>

        </tr>

        <tr>

            <th>Prix :</th>
            <td>$ {{ $commande->fortune }}</td>

        </tr>

    </table>

    @include('footer')