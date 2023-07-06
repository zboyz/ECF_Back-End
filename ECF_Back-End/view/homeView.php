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
                                <a class="nav-link navLink" href="controller/index">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="controller/login">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="controller/allBeers">Nos bières</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    <div class="d-flex border border-dark justify-content-center py-3 mt-5">
        <?php 
        foreach ($colors as $color) {
            $couleur = $color['color'];
            $quantite = $color['quantite'];
            switch ($couleur) {
                case "$couleur":
                    echo '<a class="fw-bold my-auto text-center ms-2 text-decoration-none text-white" href="controller/colorBeer' .  str_replace("é", "e", $couleur) . '.php">' . $couleur . '</a>';
                    echo '<div class="my-auto text-center text-white me-sm-3 ms-2 me-md-5">(' . $quantite . ')</div>';
                break;
            }
        }
        ?>
    </div>
    <h2 class="text-center my-5 text-uppercase fw-bold text-white">La société de distribution des bières du monde vous présente ses bières<br>Vous présente ses nouvelles bières</h2>
    <main class="container mt-5 mainCarousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    foreach ($fiveArticles as $article) {
                ?>
                <div class="carousel-item active text-center" data-bs-interval="2000">
                    <form class="justify-content-center">
                        <div class="cardIndexCarousel card text-white">
                            <img src="img/beer_bottle.jpg" class="beerPictureCarousel card-img mx-auto mt-3" alt="Photo d'une bière avec des gouttes">
                            <div class="card-header fs-5 fw-bold">
                                <?php echo ucwords($article["NOM_ARTICLE"]); ?>
                            </div>
                            <div class="cardBody">
                                <div class="cardTitle card-title px-2"><?php echo ucwords($article["NOM_MARQUE"]) . " " . ucwords($article["NOM_COULEUR"]) . " " . ucwords($article["NOM_TYPE"]); ?></div>
                                <div class="cardText card-text d-flex justify-content-around mb-3">
                                    <div>
                                        <?php echo $article["TITRAGE"] . " %"; ?>
                                    </div>
                                    <div>
                                        <?php echo $article["VOLUME"] . " cl"; ?>
                                    </div>
                                    <div>
                                        <?php echo round(($article["PRIX_ACHAT"] * 1.22), 2) . " €"; ?>
                                    </div>
                                </div>
                                <span class="inventory_status mt-2">En stock</span><br>
                                <button type="submit" name="info" class="btn btn-outline-info mt-1" value="<?php echo "infoBeer.php?key=" . $article['ID_ARTICLE']; ?>"> + d'infos </button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                    }
                ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
    <footer class="absolute-bottom text-center pt-4 pb-2">
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