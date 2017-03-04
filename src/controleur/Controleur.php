<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */
class Controleur {
	
	protected $twig;
	protected $twigParam;
	protected $className;
	
	/**
	 * Initialisation de twig
	 * @return Twig_Environment
	 */
	protected function before(){
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(ConstanteUtilitaire::REPERTOIRE_VUE_TWIG);
		$this->twig = new Twig_Environment($loader, array('cache' => 'cache','auto_reload'=>ConfigurationUtilitaire::getProperties('autoreload')));
	}
	
	/**
	 * Rendu de la vue
	 */
	protected function after($methode){
		$vue =  FonctionUtilitaire::getRepertoireVue($this->className, $methode);
		echo $this->twig->render($vue,$this->twigParam);
	}
	
}