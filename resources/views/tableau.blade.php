<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Organisator</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="vap.png" />

</head>
@include('header')

<body>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="wrapper p-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 d-flex justify-content-between">
                            <h2 class="pull-left">Agenda, calendrier ou bloc note ? Faites votre choix ici !</h2>
                            <a href="/" style="background-color: rgba(245, 12, 148, 0.2);"> Ajouter</a>
                        </div>




                        <table class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Refer</th>
                                    <th>decri</th>
                                    <th>Achat</th>
                                    <th>vente</th>
                                    <th>stock</th>
                                    <th>choix</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="readvap.php?id='. $row['id'] .'" class="me-3"><span
                                                class="bi bi-eye"></span></a>
                                        <a href="update.php?id='. $row['id'] .'" class="me-3"><span
                                                class="bi bi-pencil"></span></a>
                                        <a href="delete.php?id='. $row['id'] .'"><span class="bi bi-trash"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



</body>
@include('footer')

</html>