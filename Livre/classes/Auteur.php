<?php


class Auteur {

    private string $_nomAuteur;
    private string $_prenomAuteur;
    private DateTime $_dateNaissance;
    private array $livres = array();


    public function __construct(string $nomAuteur, string $prenomAuteur, string $dateNaissance) {
        $this->_nomAuteur = $nomAuteur;
        $this->_prenomAuteur = $prenomAuteur;
        $this->_dateNaissance = new Datetime($dateNaissance);
    }

    public function getNomAuteur() {
        echo $this->_nomAuteur;
    }
    public function getPrenomAuteur() {
        echo $this->_prenomAuteur;
    }
    public function getDateNaissance() {
        echo $this->_dateNaissance;
    }


    public function setNom(string $nomAuteur) {
        $this->_nomAuteur = $nomAuteur;
    }
    public function setPrenomAuteur(string $prenomAuteur) {
        $this->_prenomAuteur = $prenomAuteur;
    }
    public function setDateNaissance(string $dateNaissance) {
        $this->_dateNaissance = new Datetime($dateNaissance);
    }

    public function ajouterLivre($nom, $date, $nbPage, $prix) {
        // Quand j'appelle cette fonction elle me demandera en argument un objet livre, et ce dernier sera array_push dans le tableau de livres
        array_push($this->livres, array($nom, $date, $nbPage, $prix));
    }

    public function afficherBibliographie(){
        echo "Livres de ". $this->_prenomAuteur."  ". $this->_nomAuteur ."<br>";
        echo "<br>";
        echo var_dump($this->livres);
    }
    
}
