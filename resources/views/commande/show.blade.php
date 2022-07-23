@include('header')

<body style="background-color: rgba(171, 148, 126);">
    <h1>show.blade.php</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $commande->nom }}</td>
        </tr>
        <tr>

            <th>Prénom:</th>
            <td>{{ $commande->prenom }}</td>

        </tr>
        <tr>

            <th>Company:</th>
            <td>{{ $commande->company }}</td>

        </tr>

        <tr>

            <th>Fortune:</th>
            <td>$ {{ $commande->fortune }}</td>

        </tr>

    </table>

    @include('footer')