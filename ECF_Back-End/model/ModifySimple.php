<?php

require_once 'database/dbconnection.php';
// Insert one article with its image in the article table
// Check first if there is a color and insert it in images table
// Then gets the id of the inserted image and insert the article with the image id

function addColor(){

    $id = rand (5, 10);

    // Insertion de la nouvelle valeur avec l'ID suivant
    $stmt = getPDO()->prepare("INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:ID_COULEUR, :NOM_COULEUR)");
    $stmt->bindParam(':ID_COULEUR', $id);
    $stmt->bindParam(':NOM_COULEUR', $nomCouleur);
    $nomCouleur = $_POST['nomCouleur'];

    $stmt->execute();
    
}

function modifyColor() {

    $newColor = $_POST['nomCouleur'];
    $pdo = getPDO();
    $id = $_POST['idCouleur']; // La valeur de l'ID de la ligne à mettre à jour
    $nouvelle_valeur = 'nouvelle valeur'; // La nouvelle valeur à affecter à la colonne 'ma_colonne'
    $stmt = $pdo->prepare("UPDATE couleur SET NOM_COULEUR = :nouvelle_couleur WHERE ID_COULEUR = :id");
    $stmt->execute([':nouvelle_couleur' => $newColor, ':id' => $id]);

}

function deleteColor() {
    $pdo = getPDO();
    $id = $_POST['idCouleur']; // La valeur de l'ID de la ligne à supprimer
    $stmt = $pdo->prepare("DELETE FROM couleur WHERE ID_COULEUR = :id");
    $stmt->execute([':id' => $id]);
}


