<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */

require_once "src/utilitaire/ConstanteUtilitaire.php";

class Controleur {
	
	
	/**
	 * Initialisation de twig
	 * @return Twig_Environment
	 */
	protected static function before(){
		$ini_array = parse_ini_file(ConstanteUtilitaire::FICHIER_CONF);
		
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(ConstanteUtilitaire::REPERTOIRE_VUE_TWIG);
		$twig = new Twig_Environment($loader, array('cache' => 'cache','auto_reload'=>$ini_array['autoreload']));
		
		return $twig;
	}
	
}