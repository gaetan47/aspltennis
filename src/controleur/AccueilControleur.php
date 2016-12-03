<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */
require_once "src/controleur/Controleur.php";
		
class AccueilControleur extends Controleur{
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public static function index ($arg = array()){
		$twig = parent::before();
		
		//Arguments du template
		$coucou = count($arg) > 0 ? $arg[0] : '';
		
		//Rendu de la vue
		echo $twig->render('AccueilVue.twig',array('param1' => $coucou));
		
	}
	
}