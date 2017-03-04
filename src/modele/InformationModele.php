<?php
/**
 * Modele de Accueil
 * 
 * @author gaetanlussagnet
 */		
class InformationModele {
	
	private $id;
	private $contenu;
	private $titre;
	private $image;
	private $ordre;
	
	public function __construct($id, $contenu, $titre, $image, $ordre) {
		$this->id = $id;
		$this->contenu = $contenu;
		$this->titre = $titre;
		$this->image = $image;
		$this->ordre = $ordre;
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
	
	public function getImage(){
		return $this->image;
	}
	
	public function getOrdre(){
		return $this->ordre;
	}
	
	
	
	
}