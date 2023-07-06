<?php

require_once 'database/dbconnection.php';


function ticket() {
    // Récupération du dernier ID inséré automatiquement
    $pdo = getPDO();
    
    $result = $pdo->prepare("SELECT MAX(NUMERO_TICKET) FROM vendre WHERE ANNEE = 2023");
    $result->execute();
    // Incrémentation de l'ID pour obtenir l'ID suivant
    $row = $result->fetch(PDO::FETCH_NUM);
    $lastTicket = $row['0'];
    
    $annee = 2023;
    $response = $pdo->prepare(
        "SELECT * FROM vendre v
            INNER JOIN ticket t ON t.NUMERO_TICKET = v.NUMERO_TICKET
            INNER JOIN article a ON a.ID_ARTICLE = v.ID_ARTICLE
            WHERE v.NUMERO_TICKET = :lastTicket AND v.ANNEE = :annee
        LIMIT 1"
);
$response->execute([':lastTicket' => $lastTicket, ':annee' => $annee]);
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

function deleteTicket() {
        // Récupération du dernier ID inséré automatiquement
        $pdo = getPDO();
        $result = $pdo->prepare("SELECT MAX(NUMERO_TICKET) FROM vendre WHERE ANNEE = 2023");
        $result->execute();
        // Incrémentation de l'ID pour obtenir l'ID suivant
        $row = $result->fetch(PDO::FETCH_NUM);
        $lastTicket = $row['0'];
    $stmt = getPDO()->prepare(
        "DELETE FROM vendre WHERE NUMERO_TICKET = :numeroTicket AND ANNEE = :annee;
        DELETE FROM ticket WHERE  NUMERO_TICKET = :numeroTicket AND ANNEE = :annee"
    );
    $stmt->execute([':numeroTicket' => $lastTicket, ':annee' => 2023]);
}