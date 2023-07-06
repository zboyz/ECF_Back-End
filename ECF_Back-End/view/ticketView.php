<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sabri AMMARI">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Société de Distribution des Bières du Monde</title>
    </head>
    <body class="text-white">
        <header>
            <img id="logoNavbar" class="ms-5 mt-2" src="../img/logoSDBM.png" alt="Logo de Sabri AMMARI" style="width: 100px;">
        </header>

        <main class="container position-absolute start-50 top-50 translate-middle">
            
            <?php
            foreach ($tickets as $ticket) {
            ?>
            <form class="" method="POST">
                <div class="border rounded-3 bg-light text-dark w-75 text-center mx-auto">
                    <div class="d-flex flex-column my-3">
                        <div class="d-flex flex-row mb-3 justify-content-around">
                            <img class="" src="../img/logoSDBM.png" alt="Logo de Sabri AMMARI" style="width: 100px;">
                            <h2 class="text-dark mt-4 text-uppercase">Facture</h2>
                        </div>
                        <div class="d-flex flex-row mb-3 justify-content-center me-5">
                            <div class="p-2">Date de facture :</div>
                            <div class="p-2"><?php echo date("d/m/Y") . ' ' . date("H")+2 . ':' . date("i"); ?></div>
                        </div>
                        <div class="d-flex flex-row mb-3 justify-content-center me-5">
                            <div class="p-2">Facturé à :</div>
                            <div class="p-2">Mr John DOE</div>
                        </div>
                        <div class="d-flex flex-row my-3 justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-dark align-middle">
                                    <div class="d-flex flex-row mb-3 justify-content-start me-5">
                                        <div class="p-2">N° de Facture :</div>
                                        <div class="p-2"><?php echo $ticket['NUMERO_TICKET'] ?></div>
                                    </div>
                                    <thead>
                                        <tr>
                                        <th scope="col">Numéro de ticket</th>
                                        <th scope="col">Article commandé</th>
                                        <th scope="col">Quantité commandée</th>
                                        <th scope="col">TVA</th>
                                        <th scope="col">Prix total (TTC)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-secondary">
                                            <th scope="row">1</th>
                                            <td><?php echo $ticket['NOM_ARTICLE'] ?></td>
                                            <td><?php echo $ticket['QUANTITE'] ?></td>
                                            <td>20 %</td>
                                            <td><?php echo round($ticket['PRIX_VENTE'] * $ticket['QUANTITE'], 2) . ' €' ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" name="quitTicket" class="btn btn-lg btn-outline-light">Quitter</button>
                </div>
            </form>

            <?php
                }
            ?>
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
        <script src="/js/script.js"></script>

    </body>
</html>