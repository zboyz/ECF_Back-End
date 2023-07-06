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
            <nav class="navbar navbar-expand-lg bg-body-tertiary my-3">
                <div class="container-fluid">
                <button class="navbar-toggler navLink" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" data-bs-theme="dark" id="navbarSupportedContent">
                        <ul class="nav justify-content-center mx-auto">
                            <li class="nav-item">
                                <a class="nav-link navLink" href="index">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="login">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navLink" href="allBeers">Nos bières</a>
                            </li>
                            <li>
                            <form class="row my-auto ms-5 mt-2" action="../controller/searchBeer.php<?php if (isset($_GET['searchInput'])) { echo '?searchInput=' . $_GET['searchInput']; } ?>">
                                <div class="">
                                    <input type="text" name="searchInput" class="form-control" placeholder="Rechercher">
                                </div>
                            </form>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
            </nav>
        </header>
