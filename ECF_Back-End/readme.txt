Pour pouvoir se connecter à la base de données, vous devez changer :

-Username: "root" (en défaut)
-Password: "root" (en défaut)

Pour cela aller dans le fichier /model/database/dbconnexion.php:
define('DB_USER', 'root'); ---> Changer la valeur si nécessaire
define('DB_PASSWORD', 'root'); ---> Changer la valeur si nécessaire

En sachant que j'utilise la base de données du DUMP sdbm_v2 donné par mail.

index.php (point d'entrée)
router.php
readme.txt
/controllers
	/admin
        complexCRUD.php
        dashboard.php
        logout.php
        simpleCRUD.php
    404.php
    allBeers.php
    colorBeerAmbree.php
    colorBeerBlanche.php
    colorBeerBlonde.php
    colorBeerBrune.php
    homeController.php
    index.php
    infoBeer.php
    login.php
    pagination.php
    searchBeer.php
    ticket.php
/css
    main.css
/img
    beer_bottle.jpg
    logoSDBM.png
/js
    script.js
/model
    /database
        dbconnection.php
    Articles.php
    ColorAmbree.php
    ColorBlanche.php
    ColorBlonde.php
    ColorBrune.php
    ColorQuantity.php
    commande.php
    FiveArticlesRandom.php
    ModifyComplex.php
    ModifySimple.php
    pagination.php
    ticket.php
/view
    /admin
    	complexCRUDView.php
        dashboardView.php
        loginView.php
        simpleCRUDView.php
    404View.php
    allBeersView.php
    colorBeerAmbreeView.php
    colorBeerBlancheView.php
	colorBeerBlondeView.php
	colorBeerBruneView.php
	footerView.php
	headerView.php
	homeView.php
    indexView.php
    infoBeerView.php
    loginView.php
    pagination.php
    searchBeerView.php
    ticketView.php