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
    <main class="container mt-5">
        <h2 class="text-center mb-5 text-uppercase fw-bold text-white">Nos bières</h2>
        <div class="text-center">
            <div class="row justify-content-center ms-5">
                <?php
                    foreach ($articles as $article) {
                ?>
                <form class="col-sm-8 col-md-6 col-lg-4">
                    <div class="cardIndex card text-bg-dark">
                        <img src="../img/beer_bottle.jpg" class="beerPicture card-img mx-auto mt-3" alt="Photo d'une bière avec des gouttes">
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
                <?php 
                    }
                ?>
                <?php
                include 'pagination.php';
                ?>
            </div>
        </div>
    </main>
    

<?php
include 'footerView.php';
?>