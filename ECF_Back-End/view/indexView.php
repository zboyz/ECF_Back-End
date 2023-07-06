<?php
include 'headerView.php';
?>
    <div class="d-flex border border-dark justify-content-center py-3 mt-5">
        <?php 
        foreach ($colors as $color) {
            $couleur = $color['color'];
            $quantite = $color['quantite'];
            switch ($couleur) {
                case "$couleur":
                    echo '<a class="fw-bold my-auto text-centerr text-decoration-none text-white" href="colorBeer' .  str_replace("é", "e", $couleur) . '.php">' . $couleur . '</a>';
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
                            <img src="../img/beer_bottle.jpg" class="beerPictureCarousel card-img mx-auto mt-3" alt="Photo d'une bière avec des gouttes">
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

<?php
include 'footerView.php';
?>