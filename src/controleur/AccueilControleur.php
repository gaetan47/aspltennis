<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */		
class AccueilControleur extends Controleur{
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public static function action_index ($arg = array()){
		//Init twig
		$twig = parent::before();
		//Arguments du template
		$twigParam = array();
		$twigParam['param1'] =  'Accueil';
		
		parent::after($twig,get_class($this),__FUNCTION__,$twigParam);
	}
	
}