<?php
require "../app/Autoloader.php";
App\Autoloader::register();

// On teste l'autoload
// App\Utils::print_r_pre($_GET);
// On récupère la var p pour déterminer
// la page à afficher
$p = isset($_GET['p']) ? $_GET['p'] : "home";
// On détermine le parcours pour afficher la vue
$view = is_file("../views/$p.php") ? "../views/$p.php" : "../views/404.php";

// on se connecte à la database
$db =  \App\Config::getDb();
// On fait une requête sur la DB en fonction de la route

switch ($p){
	case "home":
		$posts = $db->query("SELECT * FROM posts ORDER BY id","App\Tables\Posts");
		break;
	case "single":
		$id = isset($_GET['id']) && ((int)$_GET['id']*1)>0 ? $_GET['id'] : 27;
		$posts = $db->query("SELECT * FROM posts WHERE id=?","App\Tables\Posts",[$id]);
		break;
}

// on se déconnecte de la db
$db = null;

// On charge la vue dans la mémoire tampon
ob_start();
require $view;
$view_content = ob_get_clean();
// On charge le template qui va rendre le contenu souhaité
require "../views/templates/default.php";