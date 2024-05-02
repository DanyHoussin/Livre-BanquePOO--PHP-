<?php


class Titulaire {

    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $comptes = array();


    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new Datetime($dateNaissance);
        $this->_ville = $ville;
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }
    public function getVille() {
        return $this->_ville;
    }


    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setDateNaissance(string $dateNaissance) {
        $this->_dateNaissance = new Datetime($dateNaissance);
    }
    public function setVille(string $ville) {
        $this->_ville = $ville;
    }

    public function ajouterCompte(CompteB $compte){
        $this->comptes[] = $compte; // équivalent à array_push ou +=
    }

    public function infoTitulaire(){
        echo "Nom : ".$this->getNom() ."<br>";
        echo "Prénom : ".$this->getPrenom() ."<br>";
        $age = (new DateTime())->diff($this->_dateNaissance, true);
        echo "Âge : {$age->y}  <br>";
        echo "Ville : ". $this->getVille()."<br>";
        echo $this->afficherComptes()."<br>";
    }


    public function afficherComptes(){
        echo "Comptes de ". $this->_prenom."  ". $this->_nom ." :<br>";
            foreach($this->comptes as $compte) {
                echo " - ".$compte->getLibelle(). " : " .$compte->getSolde();
            }
        }
    }

    
