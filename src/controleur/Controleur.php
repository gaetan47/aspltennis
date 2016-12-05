<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */
class Controleur {
	
	/**
	 * Initialisation de twig
	 * @return Twig_Environment
	 */
	protected static function before(){
		$config = new ConfigurationUtilitaire();
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(ConstanteUtilitaire::REPERTOIRE_VUE_TWIG);
		$twig = new Twig_Environment($loader, array('cache' => 'cache','auto_reload'=>$config->getProperties('autoreload')));
		return $twig;
	}
	
	/**
	 * Rendu de la vue
	 */
	protected static function after($twig,$class,$methode,$param){
		$vue =  FonctionUtilitaire::getRepertoireVue($class, $methode);
		echo $twig->render($vue,$param);
	}
	
}