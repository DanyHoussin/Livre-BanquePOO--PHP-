<?php



class CompteB {

    private string $_libelle;
    private int $_solde;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, int $solde, string $deviseMonetaire, Titulaire $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_deviseMonetaire = $deviseMonetaire;
        $this->_titulaire = $titulaire;
        $this->_titulaire->ajouterCompte($this);
    }

    public function getLibelle() {
        return $this->_libelle;
    }
    public function getSolde() {
        return "Vous avez ". $this->_solde ." ". $this->_deviseMonetaire;
    }
    public function getDeviseMonetaire() {
        return $this->_deviseMonetaire;
    }
    public function getTitulaire() {
        return $this->_titulaire->getNom()." ".$this->_titulaire->getPrenom();
    }


    public function setLibelle(string $libelle) {
        $this->_libelle = $libelle;
    }
    public function setSolde(int $solde) {
        $this->_solde = $solde;
    }
    public function setDeviseMonetaire(string $deviseMonetaire) {
        $this->_deviseMonetaire = $deviseMonetaire;
    }
    public function setTitulaire(string $_titulaire) {
        $this->_titulaire = $_titulaire;
    }

    
    public function crediterCompte(int $argent) {
        $this->_solde = $this->_solde + $argent;
        echo "Vous avez ajouter $argent  ". $this->getDeviseMonetaire() ." <br>";
        echo "Solde actuelle : ". $this->_solde . $this->getDeviseMonetaire()."<br>";
    }
    public function debiterCompte(int $argent) {
        $this->_solde = $this->_solde - $argent;
        echo "Vous avez enlever $argent  ". $this->getDeviseMonetaire() ." <br>";
        echo "Solde actuelle : ". $this->_solde . $this->getDeviseMonetaire()."<br>";
    }
    public function envoyerVirement(int $argent, CompteB $compte) {
        $this->_solde = $this->_solde - $argent;
        echo "Vous avez envoyé $argent  ". $this->getDeviseMonetaire(). " à ". $compte->_titulaire->getNom() ." ". $compte->_titulaire->getPrenom() ."<br>";
        echo "Solde actuelle : ". $this->_solde . $this->getDeviseMonetaire()."<br>";
        $compte->recevoirVirement($argent, $this->_titulaire->getNom(). " ". $this->_titulaire->getPrenom());
    }
    public function recevoirVirement(int $argent, $comptedelenvoie) {
        $this->_solde = $this->_solde + $argent;
        echo "Vous avez recu $argent ". $this->getDeviseMonetaire(). " de la part de $comptedelenvoie  <br>";
        echo "Solde actuelle : ". $this->_solde . $this->getDeviseMonetaire()."<br>";
    }

    public function infoCompte(){
        echo "Titulaire : ". $this->getTitulaire()."<br>";
        echo "Libellé : ".$this->getLibelle() ."<br>";
        echo "Solde : ".$this->getSolde() ."<br>";
        echo "Devise Monetaire : ".$this->getDeviseMonetaire() ."<br>";
    }

}
