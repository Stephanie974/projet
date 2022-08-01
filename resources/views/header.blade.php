<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organisator</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: rgba(24, 50, 178);">

        <div class="container-content flex-row">


            {{-- @if (Auth::user() && Auth::user()->type = 1) --}}

            <a class="navbar-brand" href="/tableau">
                <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Accueil
                </button></a>
            {{-- @endif --}}
            {{-- @if (Auth::user() && Auth::user()->type = 1) --}}
            <a class="navbar-brand" href="/commande/create">
                <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Creation de fiche produit
                </button></a>
            {{-- @endif --}}

            <a class="navbar-brand" href="/">
                <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Liste
                </button></a>

            <a class="navbar-brand" href="{{ route('login') }}">

                <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Se connecter
                </button>

                <a class="navbar-brand" href="{{ route('register') }}">

                    <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                        aria-controls="collapseWidthExample">
                        S'inscrire
                    </button>

                    <a href="{{ url('tableau') }}" class="btn bg-info hover-zoom   justify-content-md-end">Retour</a>
                    <a class="navbar-brand" href="/contact">
                        <button class="btn hover-zoom" style="background-color: rgba(138, 121, 104);" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                            aria-controls="collapseWidthExample">
                            Contact
                        </button></a>

        </div>
        </div>

        </div>
        </div>
        </div>
    </nav>