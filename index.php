<?php 

//Include pour twig
require_once 'lib/Twig/Autoloader.php';

//Chargement automatique des classes
spl_autoload_register(function ($class) {
	//Liste des package à scanner
	$package = array('controleur','modele','utilitaire','manager');
	foreach ($package as $pack){
		if (file_exists('src/'.$pack.'/' . $class . '.php')){
			require_once 'src/'.$pack.'/' . $class . '.php';
		}
	}
});

//Objet permettant d'accéder aux properties
$config = new ConfigurationUtilitaire();

//Récupération de l'url ex: accueil/index
$url = $_GET['url'];
$argumentUrl = explode("/", $url);
//Récupération de l'action qui est ensuite mappé vers le controlleur (configuration.ini)
$action = $argumentUrl[0]; //accueil
$methode = 'action_'.$argumentUrl[1]; //index

//Redirection vers l'index si l'url est incorrecte
if ($methode === null or $methode === 'action_'){
	$methode = 'action_index';
}

$parametres = array();
for ($i=2;$i < count($argumentUrl); $i++){
	$parametres[] = $argumentUrl[$i];
}

//Association de l'url avec le controlleur (configuration.ini)
$class = $config->getProperties($action);

//Routeur
if (method_exists($class,$methode)) {
	$controlleur = new $class;
	$controlleur->$methode($parametres);
}else {
	//On redirige vers l'accueil
	$ac = new AccueilControleur();
	$ac->action_index();	
}

?>