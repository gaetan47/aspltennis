<?php
/**
 * Controlleur de la page Equipe
 * 
 * @author gaetanlussagnet
 */		
class EquipeControleur extends Controleur{
	
	protected $className = 'EquipeControleur';
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public function action_index ($arg = array()){
		//Init twig
		$this->before();
		
		$this->twigParam = array('param1' =>  'Accueil');
		
		//Rendu de la vue
		$this->after(__FUNCTION__);
		
	}
	
}