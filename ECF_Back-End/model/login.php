<?php

require_once '../model/database/dbconnection.php';
// Controller to handle the login page


//function insertTableUsers () {
    $response = getPDO()->prepare(
        "CREATE TABLE IF NOT EXISTS users (
            /*id INT AUTO_INCREMENT PRIMARY KEY,*/
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
        )"
    );
    $response->execute();


    // Nom d'utilisateur à vérifier
    $username = 'admin';
    
    // Requête SQL pour vérifier si une ligne avec le nom d'utilisateur spécifié existe dans la table users
    $sql = "SELECT * FROM users WHERE username = :username";
    
    // Préparation de la requête
    $stmt = getPDO()->prepare($sql);
    
    // Exécution de la requête avec les paramètres
    $stmt->execute([':username' => $username]);
    
    // Vérification du résultat
    if ($stmt->rowCount() > 0) {
        // Une ligne avec le nom d'utilisateur spécifié existe déjà dans la table
    } else {
        // Aucune ligne trouvée, insertion d'une nouvelle ligne
        $password = 'admin';
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    
        // Préparation de la requête
        $stmt = getPDO()->prepare($sql);
    
        // Exécution de la requête avec les paramètres
        if ($stmt->execute([':username' => $username, ':password' => $password])) {
            echo "";
        } else {
            echo "";
        }
    }
    



		function logAdmin () {
	// Vérification si le formulaire a été soumis
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Requête SQL pour sélectionner l'utilisateur avec le nom d'utilisateur spécifié
		$sql = "SELECT * FROM users WHERE username = :username";

		// Préparation de la requête
		$stmt = getPDO()->prepare($sql);

		// Liaison des paramètres
		$stmt->bindValue(':username', $_POST['userName']);

		// Exécution de la requête
		$stmt->execute();

		// Vérification du résultat
		if ($stmt->rowCount() > 0) {
			// L'utilisateur avec le nom d'utilisateur spécifié a été trouvé
			$user = $stmt->fetch(PDO::FETCH_ASSOC);

			// Vérification du mot de passe
			if ($user['password'] == $_POST['userPassword']) {
				// Le mot de passe est correct, connexion réussie
				foreach ($user as $indice => $element) {
					if ($indice != 'password') {
						$_SESSION['user'][$indice] = $element;
					}
				}
				header("Location: admin/dashboard.php");
				exit;
			} else {
				// Le mot de passe est incorrect
				echo '<div class="text-center text-danger">Le mot de passe n\'est pas reconnu.<br>Veuillez taper admin</div>';
			}
		} else {
			// Aucun utilisateur trouvé avec le nom d'utilisateur spécifié
			echo '<div class="text-center text-danger">Le nom d\'utilisateur n\'est pas reconnu.<br>Veuillez taper admin</div>';
		}
	}
}


