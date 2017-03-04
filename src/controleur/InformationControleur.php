<?php
/**
 * Controlleur de la page Information
 * 
 * @author gaetanlussagnet
 */		
class InformationControleur extends Controleur{
	
	protected $className = 'InformationControleur';
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public function action_index ($arg = array()){
		//Init twig
		$this->before();
		
		$paramTwig = array();
		
		$informations = InformationManager::find();
		$paramTwig['informations'] =  $informations;
		if (count($arg) === 1){
			$informationPrincipale = InformationManager::findById(intval($arg[0]));
			$paramTwig['informationPrincipale'] =  $informationPrincipale;
		}
		$this->twigParam = $paramTwig;
		
		
		$this->after(__FUNCTION__);
	}
	
}