<?php

require_once 'database/dbconnection.php';

function AddArticle(){

    $idArticle = rand(3922, 3930);


    // Insertion de la nouvelle valeur avec l'ID suivant
    $stmt = getPDO()->prepare(
        "INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, PRIX_ACHAT, VOLUME, TITRAGE, ID_MARQUE, ID_COULEUR, ID_TYPE)
            VALUES (:ID_ARTICLE, :NOM_ARTICLE, :PRIX_ACHAT, :VOLUME, :TITRAGE, :ID_MARQUE, :ID_COULEUR, :ID_TYPE)"
    );

    $stmt->bindParam(':ID_ARTICLE', $idArticle);
    $stmt->bindParam(':NOM_ARTICLE', $nomArticle);
    $stmt->bindParam(':PRIX_ACHAT', $prixAchat);
    $stmt->bindParam(':VOLUME', $volume);
    $stmt->bindParam(':TITRAGE', $titrage);
    $stmt->bindParam(':ID_MARQUE', $nomMarque);
    $stmt->bindParam(':ID_COULEUR', $nomCouleur);
    $stmt->bindParam(':ID_TYPE', $nomType);

    $nomArticle = $_POST['nomArticle'];
    $prixAchat = $_POST['prixAchat'];
    $volume = $_POST['volume'];
    $titrage = $_POST['titrage'];
    $nomMarque = $_POST['nomMarque'];
    $nomCouleur = $_POST['nomCouleur'];
    $nomType = $_POST['nomType'];

    $stmt->execute();
    

}


function modifyArticle () {
        // Récupération des valeurs à partir du formulaire
        $idArticle = $_POST['idArticle'];
        $nomArticle = $_POST['nomArticle'];
        $prixAchat = $_POST['prixAchat'];
        $volume = $_POST['volume'];
        $titrage = $_POST['titrage'];
        $nomMarque = $_POST['nomMarque'];
        $nomCouleur = $_POST['nomCouleur'];
        $nomType = $_POST['nomType'];
    
        // Mise à jour de la ligne avec les nouvelles valeurs
        $stmt = getPDO()->prepare(
            "UPDATE article SET NOM_ARTICLE = :NOM_ARTICLE, PRIX_ACHAT = :PRIX_ACHAT, VOLUME = :VOLUME, TITRAGE = :TITRAGE, ID_MARQUE = :ID_MARQUE, ID_COULEUR = :ID_COULEUR, ID_TYPE = :ID_TYPE
                WHERE ID_ARTICLE = :ID_ARTICLE"
        );
    
        $stmt->bindParam(':ID_ARTICLE', $idArticle);
        $stmt->bindParam(':NOM_ARTICLE', $nomArticle);
        $stmt->bindParam(':PRIX_ACHAT', $prixAchat);
        $stmt->bindParam(':VOLUME', $volume);
        $stmt->bindParam(':TITRAGE', $titrage);
        $stmt->bindParam(':ID_MARQUE', $nomMarque);
        $stmt->bindParam(':ID_COULEUR', $nomCouleur);
        $stmt->bindParam(':ID_TYPE', $nomType);
    
        $stmt->execute();
}


function deleteArticle() {
    $pdo = getPDO();
    $id = $_POST['idArticle']; // La valeur de l'ID de la ligne à supprimer
    $stmt = $pdo->prepare("DELETE FROM article WHERE ID_ARTICLE = :id");
    $stmt->execute([':id' => $id]);
}
