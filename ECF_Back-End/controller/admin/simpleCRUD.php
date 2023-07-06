<?php

// Require the site information, the article model and the function to treat the login

require_once '../../model/ModifySimple.php';


function displayModifyColor () {
    
    if (isset($_POST['saveButton'])) {
        if (empty($_POST['nomCouleur'])) {
            echo '<span class="text-white">Veuillez entrer un nom de couleur, ou quitter.</span>';
        } else {
            $modifyColor = addColor();
        echo '<span class="text-white">Votre nouvelle couleur a bien été créée.</span>';
        }
    }

    if (isset($_POST['modifyButton'])) {
        modifyColor();
        echo '<span class="text-white">Votre couleur a bien été modifiée.</span>';
    }

    if (isset($_POST['deleteButton'])) {
        deleteColor();
        echo '<span class="text-white">Votre couleur a bien été supprimée.</span>';
    }
}


// Afficher la vue de la page d'accueil pour afficher les informations sur les articles
include '../../view/admin/simpleCRUDView.php';

