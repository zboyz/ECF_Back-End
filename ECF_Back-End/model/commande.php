<?php
ini_set('display_errors', '0');

// Get the connexion to the database
require_once 'database/dbconnection.php';

function addCommand($key, $quantityValue) {
    // Récupération des données de l'utilisateur
    $key = $_GET['key'];
    $quantityValue = $_POST['quantityValue'];
    
    // Connexion à la base de données
    $db = getPDO();

    function selectPrice($key) {
        $sql = "SELECT PRIX_ACHAT FROM article WHERE ID_ARTICLE = :key";
        $stmt = getPDO()->prepare($sql);
        $stmt->execute([':key' => $key]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    $selectPrice = selectPrice($key);

    $lastTicket = rand(1, 1000);
    $annee = date("Y");
    $idArticle = $key;
    $quantite = $quantityValue;
    $prixVente = ($selectPrice['PRIX_ACHAT'])*1.22;


    $sql = "INSERT INTO ticket (ANNEE, NUMERO_TICKET) VALUES (:annee, :numeroTicket);
            INSERT INTO vendre (ANNEE, NUMERO_TICKET, ID_ARTICLE, QUANTITE, PRIX_VENTE)
            VALUES (:annee, :numeroTicket, :ID_ARTICLE, :QUANTITE, :PRIX_VENTE)"; 
    $stmt = $db->prepare($sql);

    $stmt->execute([
        ':annee' => $annee,
        ':numeroTicket' => $lastTicket,
        ':ID_ARTICLE' => $idArticle,
        ':QUANTITE' => $quantite,
        ':PRIX_VENTE' => $prixVente
    ]);
}


function addCommandSearch($quantityValue, $searchInput) {

    // Récupération des données de l'utilisateur
    $searchInput = $_GET['searchInput'];
    $quantityValue = $_POST['quantityValue'];

    // Connexion à la base de données
    $db = getPDO();
    function selectPriceSearch($searchInput) {
        $sql = "SELECT PRIX_ACHAT FROM article WHERE NOM_ARTICLE = :searchInput";
        $stmt = getPDO()->prepare($sql);
        $stmt->execute([':searchInput' => $searchInput]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function selectIdArticle($searchInput) {
        $sql = "SELECT ID_ARTICLE FROM article WHERE NOM_ARTICLE = :searchInput";
        $stmt = getPDO()->prepare($sql);
        $stmt->execute([':searchInput' => $searchInput]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    $selectIdArticle = selectIdArticle($searchInput);
    $selectPriceSearch = selectPriceSearch($searchInput);
    $lastTicket = rand(1, 1000);
    $annee = date("Y");
    $idArticle = $selectIdArticle['ID_ARTICLE'];
    $quantite = $quantityValue;
    $prixVenteSearch = ($selectPriceSearch['PRIX_ACHAT'])*1.22;

    $sql = "INSERT INTO ticket (ANNEE, NUMERO_TICKET) VALUES (:annee, :numeroTicket);
            INSERT INTO vendre (ANNEE, NUMERO_TICKET, ID_ARTICLE, QUANTITE, PRIX_VENTE)
            VALUES (:annee, :numeroTicket, :ID_ARTICLE, :QUANTITE, :PRIX_VENTE)"; 
    $stmt = $db->prepare($sql);

    $stmt->execute([
        ':annee' => $annee,
        ':numeroTicket' => $lastTicket,
        ':ID_ARTICLE' => $idArticle,
        ':QUANTITE' => $quantite,
        ':PRIX_VENTE' => $prixVenteSearch
    ]);
}

