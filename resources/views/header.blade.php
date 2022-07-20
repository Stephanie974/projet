<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/ico" href="../../img/index.png" />
    <title>Organisator</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: rgba(245, 12, 148, 0.2);">

        <div class="container-content flex-row">


            <a class="navbar-brand" href="/tableau">
                <button class="btn bg-danger hover-zoom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Accueil
                </button></a>

            <a class="navbar-brand" href="/commande/create">
                <button class="btn bg-danger hover-zoom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    commande
                </button></a>

            <a class="navbar-brand" href="/test">
                <button class="btn bg-danger hover-zoom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Enregistrement
                </button></a>

            <a class="navbar-brand" href="/">
                <button class="btn bg-danger hover-zoom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Tableau
                </button></a>
            <a class="navbar-brand" href="/app">
                <button class="btn bg-danger hover-zoom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    login
                </button></a>
            {{-- <a class="navbar-brand">
                Styling a select menu </a>

            <style>
                select {
                    width: 100%;
                    padding: 16px 20px;
                    border: none;
                    border-radius: 4px;
                    background-color: #f1f1f1;
                }
            </style>
            <form>
                <select id="organize" name="organize">
                    <option value="au">Bloc note</option>
                    <option value="ca">Agenda</option>
                    <option value="usa">Calendrier</option>
                </select>
            </form> --}}



        </div>
        </div>
        {{--
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    Choisissez!
                </h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Calendrier
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a class="dropdown-item" href="readvapnom.php">Recherche par nom</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapprixachat.php">Recherche par prix achat</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapprixvente.php">Recherche par prix vente</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvaprefer.php">Recherche par réference</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapdescri.php">Recherche par description</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Agenda
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a class="dropdown-item" href="readvapnom.php">Recherche par nom</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapprixachat.php">Recherche par prix achat</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapprixvente.php">Recherche par prix vente</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvaprefer.php">Recherche par réference</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readvapdescri.php">Recherche par description</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Bloc note
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a class="dropdown-item" href="readliqnom.php">Recherche par nom</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readliqprixachat.php">Recherche par prix achat</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readliqprixvente.php">Recherche par prix vente</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readliqrefer.php">Recherche par réference</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="readliqdescri.php">Recherche par description</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn bg-danger hover-zoom" type="submit">
                        Recherche
                    </button>
                </form> --}}




            </div>
        </div>
        </div>
    </nav>
    {{--
</body>

</html> --}}