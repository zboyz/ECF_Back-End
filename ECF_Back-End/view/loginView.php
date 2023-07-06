<?php
include 'headerView.php';
?>

    <div class="login-box position-absolute top-50 start-50 translate-middle">
        <h2>CONNEXION</h2>
        <form method="POST">
            <div class="user-box">
                <input type="text" name="userName" required>
                <label>Nom d'utilisateur</label>
            </div>
            <div class="user-box">
                <input type="password" name="userPassword" required>
                <label>Mot de passe</label>
            </div>
            <div>
                <?php 
                $logAdmin = logAdmin();
                echo $logAdmin; 
                ?> 
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-outline-light">Se connecter</button>
            </div>
            
        </form>
    </div>
    <footer class="fixed-bottom text-center pt-4 pb-2">
        <div class="social">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-google-plus"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-instagram"></i>
        </div>
        <p class="copyright text-center">Société de Distribution des Bières du Monde created by Sabri AMMARI &copy; 2023</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

    </body>
</html>