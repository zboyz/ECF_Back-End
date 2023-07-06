<?php

require_once '../model/ticket.php';

$tickets = ticket();

if (isset($_POST['quitTicket'])) {

    deleteTicket();

    // Redirection vers la page d'accueil
    header("Location: ../controller/index.php");

}

include '../view/ticketView.php';