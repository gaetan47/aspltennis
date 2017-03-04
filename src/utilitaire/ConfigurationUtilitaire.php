<?php
/**
 * Permet de lire le fichier de configuration
 * 
 * @author gaetanlussagnet
 *
 */
class ConfigurationUtilitaire {
	
	private static $properties = null;
	
	/**
	 * Retourne la valeur en fonction d'une clé ou null
	 * 
	 * @param unknown $cle
	 * @return mixed|NULL
	 */
	public static function getProperties($cle){
		
		if (self::$properties === null){
			self::$properties = parse_ini_file(ConstanteUtilitaire::FICHIER_CONF);
		}
		
		if ($cle !== null && array_key_exists($cle, self::$properties)){
			return self::$properties[$cle];
		}
		return null;
	}
	
}