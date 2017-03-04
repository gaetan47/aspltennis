<?php

class AccueilManager extends Manager {
	
	protected static $tableName = "accueil";
	
	public static function sqlToObject($reponseSql,$collection = true){
		$return = array();
		
		while ($donnees = $reponseSql->fetch()){
			$id = $donnees['id'];
			$contenu = $donnees['contenu'];
			$titre = $donnees['titre'];
			$signature = $donnees['signature'];
			
			$return[] = new AccueilModele($id,$contenu,$titre,$signature);
		}
		
		$reponseSql->closeCursor();
		return $return;
	}
	
	
	
}	