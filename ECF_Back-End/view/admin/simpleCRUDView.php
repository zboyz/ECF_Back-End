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
            <form class="" method="POST">
                    <div class="form-group d-flex flex-column align-items-center">
                        <label for="nomCouleur" class="m-1 col-md-6 col-sm-12">Nom de la nouvelle couleur</label>
                        <input id="nomCouleur" name="nomCouleur" class="form-control w-50 align-items-center col-md-6 col-sm-12" type="text" placeholder="Nom de la nouvelle couleur">
                    </div>
                    <div class="form-group d-flex flex-column align-items-center">
                        <label for="idCouleur" class="m-1 col-md-6 col-sm-12">ID de la couleur à modifier</label>
                        <input id="idCouleur" name="idCouleur" class="form-control w-50 align-items-center col-md-6 col-sm-12" type="text" placeholder="ID de la couleur à modifier">
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <button name="saveButton" type="submit" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Enregistrer</button>
                        <a class="col-4 btn btn-lg btn-outline-danger m-4" href="../../controller/admin/dashboard.php">Quitter</a>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <button name="modifyButton" type="submit" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Modifier</button>
                        <button name="deleteButton" type="submit" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Supprimer</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="text-center w-50">
                            <?php displayModifyColor (); ?>
                        </div>
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