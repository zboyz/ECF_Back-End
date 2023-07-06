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

        <main class="container ">
            <form class="" method="POST">
                <div class="row my-4">
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="idArticle" class="col-md-6 col-sm-10 col-form-label ms-1">Id de la bière à modifier</label>
                        <input class="form-control w-75" type="text" placeholder="Id de la bière à modifier" id="idArticle" name="idArticle">
                    </div>
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="prixAchat" class="col-md-6 col-sm-10 col-form-label ms-1">Prix d'achat de la nouvelle bière</label>
                        <input class="form-control w-75" type="number" placeholder="Prix d'achat de la nouvelle bière" id="prixAchat" name="prixAchat">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="nomArticle" class="col-md-6 col-sm-10 col-form-label ms-1">Nom de la nouvelle bière</label>
                        <input class="form-control w-75" type="text" placeholder="Nom de la nouvelle bière" id="nomArticle" name="nomArticle">
                    </div>
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="nomMarque" class="col-md-6 col-sm-10 col-form-label ms-1">Id de la marque de la nouvelle bière</label>
                        <input class="form-control w-75" type="number" placeholder="Id de la marque de la nouvelle bière" id="nomMarque" name="nomMarque">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="nomType" class="col-md-6 col-sm-10 col-form-label ms-1">Type de la nouvelle bière</label>
                        <input class="form-control w-75" type="text" placeholder="Id du type de la nouvelle bière" id="nomType" name="nomType">
                    </div>
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="nomCouleur" class="col-md-6 col-sm-10 col-form-label ms-1">Couleur de la nouvelle bière</label>
                        <input class="form-control w-75" type="number" placeholder="Id de la couleur de la nouvelle bière" id="nomCouleur" name="nomCouleur">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="titrage" class="col-md-6 col-sm-10 col-form-label ms-1">Titrage de la nouvelle bière</label>
                        <input class="form-control w-75" type="number" placeholder="Titrage de la nouvelle bière" id="titrage" name="titrage">
                    </div>
                    <div class="form-group col-md-6 col-sm-10">
                        <label for="volume" class="col-md-6 col-sm-10 col-form-label ms-1">Volume de la nouvelle bière</label>
                        <input class="form-control w-75" type="number" placeholder="Volume de la nouvelle bière" id="volume" name="volume">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="d-flex justify-content-center text-center">
                        <button type="submit" name="saveButton" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Enregistrer</button>
                        <a class="col-4 btn btn-lg btn-outline-danger m-4" href="../../controller/admin/dashboard.php">Quitter</a>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <button name="modifyButtonArticle" type="submit" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Modifier</button>
                        <button name="deleteButtonArticle" type="submit" class="align-items-center col-4 btn btn-lg btn-outline-info m-4">Supprimer</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="text-center w-50">
                            <?php displayAddArticle (); ?>
                        </div>
                    </div>
                </div>
                
            </form>
        </main>
        <footer class="relative-bottom text-center pt-4 pb-2">
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