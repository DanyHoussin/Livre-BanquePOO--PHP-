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

    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre; // équivalent à array_push ou +=
      }

    public function afficherBibliographie(){
        echo '<h3>'."Livres de ". $this->_prenomAuteur."  ". $this->_nomAuteur .'</h3>';
        // echo var_dump($this->livres);
            foreach($this->livres as $livre) {
                echo $livre->getNom(). " (" .$livre->getDate(). ") : ". $livre->getNbPage(). " pages / ". $livre->getPrix(). " euros <br>";
            }
        }
    }

    
