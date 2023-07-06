<?php
include 'headerView.php';
?>

    <?php
        // Vérification des résultats
        if ($searchArticle == false) {
            // Affichage d'un message d'erreur
        ?>
        <main id="errorMessage" class="container d-flex">
            <div class="mx-auto my-auto">
                <p class="text-center fs-1 fw-bold p-3">Aucun résultat</p>
                <p class="fs-3 text-center">Aucun article n'a été trouvé avec ce nom ! <br> Essayer un autre nom.</p>
            </div>
        </main>

    <?php
        } elseif (isset($articleName)) {
    ?>

    <main class="container text-white">
        <h2 class="fw-bold text-white text-center pt-4"><?php echo $searchArticle["NOM_ARTICLE"] ?></h2>
        <div class="row justify-content-around  align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto mt-5">
                <div class="card bg-transparent text-center border">
                    <div class="card-body">
                        <h5 class="card-title border-bottom text-center pb-2">Commande</h5>
                        <form method="post" class="text-center">
                            <div>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="card-text"> Prix : </div>
                                    <div class="card-text"><?php echo round($searchArticle["PRIX_ACHAT"]*1.22, 2) . ' €' ?></div>
                                </div>
                                <div class="incrementcontainer d-flex mt-2 text-center me-2">
                                    <button type="button" class="dec button my-auto"><i class="fa fa-minus"></i></button>
                                    <input type="text" name="quantityValue" value="1" class="number">
                                    <button type="button" class="inc button my-auto"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="row my-3 justify-content-center">
                                <button type="submit" name="commandButton" class="col-8 col-md-6 btn btn-outline-light mx-2 mb-3 text-nowrap">Commander</button>
                                <a href="../controller/ticket" class="col-8 col-md-6 btn btn-outline-light mx-2">Facture</a>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6 mx-auto">
                <div class="card mt-5 mb-3 bg-transparent border-0">
                    <div class="d-flex flex-column align-items-center">
                        <div class="my-auto">
                            <div class="card-body">
                                <p class="card-text">Au nez éclosent très vite des notes fruitées, entre pointe de miel et raisins secs.<br>La dégustation ne trahit pas notre première idée .<br>Voici une bière particulièrement légère, tout en fruité et douceur sucrée, que des touches épicées viennent relever pour ne pas que la dégustation soit trop monotone.<br>La finale se fait maltée mais très désaltérante.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-3 justify-content-center align-items-center">
                        <div class="mt-5 mb-3">
                            <img id="imgInfo" src="../img/beer_bottle.jpg" class="img-fluid rounded" alt="Photo d'une bouteille de bière en verre.">
                        </div>
                        <ul class="list-group">
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Pays : <?php echo $searchArticle["NOM_PAYS"] ?>
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Continent : <?php echo $searchArticle["NOM_CONTINENT"] ?>
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Brasserie : <?php echo $searchArticle["NOM_MARQUE"] ?>
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Couleur : <?php echo $searchArticle["NOM_COULEUR"] ?>
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Type : <?php echo $searchArticle["NOM_TYPE"] ?>
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Alcool : <?php echo $searchArticle["TITRAGE"] ?> %
                            </li>
                            <li class="groupList list-group-item border-0 bg-transparent text-white">
                                Volume : <?php echo $searchArticle["VOLUME"] ?> cl
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        } else {
            echo 'Aucun article trouvé avec ce nom';
        }
    ?>


<?php
include 'footerView.php';
?>