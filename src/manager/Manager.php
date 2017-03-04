<?php

class Manager {
	
	/**
	 * Nom de la table en base de données
	 * Défini dans les classes filles
	 * @var string
	 */
	protected static $tableName;
	
	/**
	 * Objet de connexion à la base de données 
	 * 
	 * @var PDO 
	 */
	protected static $bd = null;
	
	/**
	 * Récupération du singleton permattant la connexion 
	 * à la base de données
	 * 
	 * @return PDO
	 */
	protected static function getBdd(){
		return self::connect();
	}
	
	/**
	 * Méthode statique permettant la connexion à la base de données 
	 * en fonction du fichier de configuration
	 * 
	 * @throws Exception
	 * @return PDO
	 */
	private static function connect(){
		if (self::$bd === null){
			try
			{
				$host = ConfigurationUtilitaire::getProperties('host');
				$dbname = ConfigurationUtilitaire::getProperties('dbname');
				$user = ConfigurationUtilitaire::getProperties('user');
				$mdp = ConfigurationUtilitaire::getProperties('mdp');
				self::$bd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $mdp);
			}
			catch(Exception $e)
			{
				throw  new Exception("Erreur de connection à la base de données");
			}
		}
			
		return self::$bd;;
	}
	
	public static function find(){
		//Connexion à la BDD
		$bdd = self::getBdd();
		$reponse = $bdd->query('SELECT * FROM ' . static::$tableName);
		return static::sqlToObject($reponse);
	}
	
	public static function findById($id){
		//Connexion à la BDD
		$bdd = self::getBdd();
		$reponse = $bdd->query('SELECT * FROM ' . static::$tableName . ' WHERE id = ' . $id );
		return static::sqlToObject($reponse,false);
	}
	
	
}