<?php

class InformationManager extends Manager {
	
	protected static $tableName = "information";
	
	public static function sqlToObject($reponseSql,$collection = true){
		$return = array();
		
		while ($donnees = $reponseSql->fetch()){
			$id = $donnees['id'];
			$contenu = $donnees['contenu'];
			$titre = $donnees['titre'];
			$image = $donnees['image'];
			$ordre = $donnees['ordre'];
			
			$return[] = new InformationModele($id,$contenu,$titre,$image,$ordre);
		}
		
		$reponseSql->closeCursor();
		if (!$collection){
			return $return[0];
		}
		
		return $return;
	}
	
	
	
}	