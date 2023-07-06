<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sabri AMMARI">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Société de Distribution des Bières du Monde</title>
    </head>
    <body class="text-white">
        <header>
            <img id="logoNavbar" class="ms-5 mt-2" src="img/logoSDBM.png" alt="Logo de Sabri AMMARI" style="width: 100px;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary my-3">
                <div class="container-fluid">
                <button class="navbar-toggler navLink" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav justify-content-center mx-auto">
                            <li class="nav-item">
                                <a class="nav-link navLink" href="controller/index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="controller/login.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="controller/allBeers.php">Nos bières</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container position-absolute start-50 top-50 translate-middle w-50 h-50">
            <div class="page-404">
                <p class="p-3">Erreur 404</p>
                <span>La page est en construction ou n'existe plus !</span>
            </div>
        </main>

        <footer class="fixed-bottom text-center pt-4 pb-2">
            <div class="social">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-google-plus"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-instagram"></i>
            </div>
            <p class="copyright text-center">Société de Distribution des Bières du Monde created by Sabri AMMARI &copy; 2023</p>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>

    </body>
</html>