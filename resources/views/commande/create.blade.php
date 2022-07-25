@include('header')

<body style="background-color: rgba(134, 199, 237);">
    <div>


        <h1>Création de fiche produit</h1>


        @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

        @endif

        <form class="mb-5" action="{{ url('commande') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="nom">Nom du produit:</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez un nom de produit" name="nom">
            </div>

            <div class="form-group mb-3">
                <label for="company">Couleur:</label>
                <input type="text" class="form-control" id="company" placeholder="Entrez une couleur" name="prenom">

            </div>
            <div class="form-group mb-3">
                <label for="prenom">Quantité:</label>
                <input type="text" class="form-control" id="prenom" placeholder="Entrez une quantité" name="company">

            </div>

            <div class="form-group mb-3">
                <label for="fortune">Prix:</label>
                <input type="number" class="form-control" id="fortune" placeholder="Entrez un prix" name="fortune">
            </div>



            <button type="submit" class="btn btn-primary">Enregister</button>

        </form>

    </div>
    @include('footer')