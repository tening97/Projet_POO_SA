<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/ext-core/3.1.0/ext-core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- BOotstrap telecharger -->
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="../../public/css/style.css">



</head>


<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-info bg-dark px-5 mb-3 d-flex align-items-center d-flex align-items-center <?= showNav() ?>">
        <div class="d-flex align-items-center">
            <a class="nav-link text-light " href="#">ODC SCHOOL</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto d-flex justify-content-between w-100">

                <div class="d-flex">
                    <li class="nav-item active">
                        <a class="nav-link text-light " href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link text-light " href="personne">Personne <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link text-light " href="professeur">Professeur <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link text-light " href="rp">RP <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link text-light dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="etudiant">Etudiant <span class="sr-only">(current)</span></a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="etudiant">Liste Etudiant</a></li>
                            <li><a class="dropdown-item" href="ajoutEtudiant">Ajouter Etudiant</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link text-light dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="etudiant">Classe <span class="sr-only">(current)</span></a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="classes">Liste Classe</a></li>
                            <li><a class="dropdown-item" href="ajoutClasse">Ajouter Classe</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link text-light dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="etudiant">Inscription <span class="sr-only">(current)</span></a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="inscrire">Etudiant</a></li>
                            <li><a class="dropdown-item" href="ajoutClasse">Ajouter Classe</a></li>

                        </ul>
                    </li>
                </div>

                <div>
                    <li class="nav-item bg-info">
                        <a class=" nav-link text-light " href=" logout">Deconnexion</a>
                    </li>
                </div>



        </div>
    </nav>

    <div class="container">
        <section class="text-center p-5">
            <!-- Background image -->

            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong mt-5" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
                <div class="card-body py-5 px-md-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-x-5">
                            <?= $content_for_views ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>





    <script src="<?= $Constantes::WEB_ROOT . 'js/script.js' ?>"></script>

</body>

</html>