<?php
require "../app/Autoloader.php";
App\Autoloader::register();

// On teste l'autoload
// App\Utils::print_r_pre($_GET);
// On récupère la var p pour déterminer
// la page à afficher
$p = isset($_GET['p']) ? $_GET['p'] : "home";

// Authentication 
$auth = new \App\Auth\DbAuth();
if (!$auth->logged()) {
	header("HTTP/1.0 401 Unauthorized");
	die("Not authorized !");
}

// On détermine le parcours pour afficher la vue
$view = is_file("../views/admin/$p.php") ? "../views/admin/$p.php" : "../views/pages/404.php";

// on se connecte à la database

// On fait une requête sur la DB en fonction de la route

switch ($p) {
	case "home":
	
		break;
	case "single":
		
		break;
	case "categories":
		
		break;
	case "category":
		
		break;
}


// On charge la vue dans la mémoire tampon
ob_start();
require $view;
$view_content = ob_get_clean();
// On charge le template qui va rendre le contenu souhaité
require "../views/templates/adm.php";
