<?php
/**
 * Contient les constantes utiles au traitement
 * 
 * @author gaetanlussagnet
 *
 */
class FonctionUtilitaire {
	
	/**
	 * En fonction d'une classe et d'une méthode
	 * détermination du répertoire et du fichier twig
	 * AccueilControlleur -> accueil/index.twig
	 * 
	 * @param unknown $className
	 * @param unknown $methode
	 * @return string
	 */
	public static function getRepertoireVue($className,$methode){
		$repertoire = substr($className, 0, -10);
		$fichier = substr($methode, 7);
		return strtolower($repertoire).'/'.strtolower($fichier) . '.'. ConstanteUtilitaire::EXTENSION_TWIG;
	}
	
}