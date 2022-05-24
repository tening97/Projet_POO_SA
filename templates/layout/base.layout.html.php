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


<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-dark px-5 mb-3  <?= showNav() ?>">
        <a class="navbar-brand text-light " href="#">ODC SCHOOL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light " href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link text-light " href="logout">Deconnexion</a>
                </li>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <?= $content_for_views ?>



    <script src="<?= $Constantes::WEB_ROOT . 'js/script.js' ?>"></script>

</body>

</html>