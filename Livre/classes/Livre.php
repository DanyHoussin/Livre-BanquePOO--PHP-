<?php



class Livre {

    private string $_nom;
    private DateTime $_date;
    private int $_nbPage;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct(string $nom, string $date, int $nbPage, int $prix, Auteur $auteur) {
        $this->_nom = $nom;
        $this->_date = new DateTime($date);
        $this->_nbPage = $nbPage;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        // "comme j'ai accès à un objet auteur a la ligne 18, j'ai donc accès aux méthodes public de la classe auteur
        // je vais faire appel a une fonction provenant de la classe auteur me permettant de push le livre que je suis entrain de construire, dans le tableau de $livres de l'auteur"
        $this->_auteur->ajouterLivre($nom, $date, $nbPage, $prix);
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getDate() {
        return $this->_date;
    }
    public function getNbPage() {
        return $this->_nbPage;
    }
    public function getPrix() {
        return $this->_prix;
    }
    public function getAuteur() {
        return $this->_auteur;
    }


    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function setDate(string $date) {
        $this->_date = new DateTime($date);
    }
    public function setNbPage(int $nbPage) {
        $this->_nbPage = $nbPage;
    }
    public function setPrix(int $prix) {
        $this->_prix = $prix;
    }
    public function setAuteur(Auteur $auteur) {
        $this->_auteur = $auteur;
    }
    
}
