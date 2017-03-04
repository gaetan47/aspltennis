<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */		
class AccueilControleur extends Controleur{
	
	protected $className = 'AccueilControleur';
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public function action_index ($arg = array()){
		//Init twig
		$this->before();
		
		$paramTwig = array();
		
		$paramTwig['param1'] = 'Accueil';
		$accueil= AccueilManager::find();
		$paramTwig['param2'] = $accueil[0]->getContenu();
		
		$this->twigParam = $paramTwig;
		
		$this->after(__FUNCTION__);
	}
	
}