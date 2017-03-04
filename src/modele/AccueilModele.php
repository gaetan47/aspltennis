<?php
/**
 * Modele de Accueil
 * 
 * @author gaetanlussagnet
 */		
class AccueilModele {
	
	private $id;
	private $contenu;
	private $titre;
	private $signature;
	
	public function __construct($id, $contenu, $titre, $signature) {
		$this->id = $id;
		$this->contenu = $contenu;
		$this->titre = $titre;
		$this->signature = $signature;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getContenu(){
		return $this->contenu;
	}
	
	public function getTitre(){
		return $this->titre;
	}
	
	public function getSignature(){
		return $this->signature;
	}
	
	
	
	
}