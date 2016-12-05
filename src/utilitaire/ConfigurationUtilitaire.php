<?php
/**
 * Permet de lire le fichier de configuration
 * 
 * @author gaetanlussagnet
 *
 */
class ConfigurationUtilitaire {
	
	private $properties = array();
	
	public function __construct(){
		$this->properties = parse_ini_file(ConstanteUtilitaire::FICHIER_CONF);
	}
	
	/**
	 * Retourne la valeur en fonction d'une clé ou null
	 * 
	 * @param unknown $cle
	 * @return mixed|NULL
	 */
	public function getProperties($cle){
		if ($cle !== null && array_key_exists($cle, $this->properties)){
			return $this->properties[$cle];
		}
		return null;
	}
	
}