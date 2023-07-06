<?php

// Controller to handle the login page


// Get the connexion to the database
require_once '../../model/database/dbconnection.php';

    $response = getPDO()->prepare(
        "DROP TABLE users"
    );
    $response->execute();


    header("../../controller/index.php");

