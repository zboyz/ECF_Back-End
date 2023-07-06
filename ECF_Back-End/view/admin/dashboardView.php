<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sabri AMMARI">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Société de Distribution des Bières du Monde</title>
    </head>
    <body class="text-white">

        <main class="container position-absolute start-50 top-50 translate-middle">
            <h3 class="text-center mb-5 pb-3"> Bienvenue Administrateur </h3>
            <form class="" method="POST">
                <div class="d-flex flex-row justify-content-between">
                    
                    <a class="col-5 btn btn-lg btn-outline-info my-4" href="../../controller/admin/simpleCRUD.php">CRUD Couleur</a>
                    <a class="col-5 btn btn-lg btn-outline-info my-4" href="../../controller/admin/complexCrud.php">CRUD Bière</a>
                    
                </div>
                <div class="text-center mt-4">
                    <button type="submit" name="quitButton" class="col-4 btn btn-lg btn-outline-danger">Quitter</button>
                </div>
            </form>
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