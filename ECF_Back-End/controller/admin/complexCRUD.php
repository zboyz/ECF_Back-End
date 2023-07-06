<?php

// Require the site information, the article model and the function to treat the login

require_once '../../model/ModifyComplex.php';

function displayAddArticle () {
    
    if (isset($_POST['saveButton'])) {
        if (empty($_POST['nomArticle'])) {
            echo '<span class="text-white">Veuillez entrer un nom de bière, ou quitter.</span>';
        } else {
            AddArticle();
            echo '<span class="text-white">Votre nouvelle bière a bien été créée.</span>';
        }
    }

    if (isset($_POST['modifyButtonArticle'])) {
        modifyArticle();
        echo '<span class="text-white">Votre bière a bien été modifiée.</span>';
    }

    if (isset($_POST['deleteButtonArticle'])) {
        deleteArticle();
        echo '<span class="text-white">Votre bière a bien été supprimée.</span>';
    }
}


// Afficher la vue de la page d'accueil pour afficher les informations sur les articles
include '../../view/admin/complexCRUDView.php';

?>