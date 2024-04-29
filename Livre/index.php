<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$auteur1 = new Auteur("King", "Stephen", "04/04/2024") ;
// $auteur2 = new Auteur("Random", "Curry", "26/04/2024") ;
// $auteur3 = new Auteur("Random2", "Abby", "26/04/2024") ;

echo var_dump($auteur1)."<br>";
echo "<br>";
$livre2 = new Livre("Ca", "04/04/1986", 1138, 20, $auteur1) ;
$livre3 = new Livre("Simetierre", "05/01/1983", 373, 15, $auteur1) ;
// $livre4 = new Livre("Random", "25/04/2024", 0, 0, $auteur1) ;

// echo $l2->afficherBibliographie()."<br/>"; 

echo var_dump($auteur1)."<br>";
echo "<br>";
echo var_dump($livre2)."<br>";
echo "<br>";
echo var_dump($livre3)."<br>";
echo "<br>";
echo $auteur1->afficherBibliographie()."<br/>";


?>
<br>
classe : 

objet : Un object quelconque (Un livre)

4 pilliers POO : Encapsulation, Abstraction, Héritage et Polymorphisme

Encapsulation : Utilisation et modification des attributs d'une classe 
en passant que par des fonctions s'y trouvant (Attribut non modifiable 
avec des fonctions endehors de la classe concerné)

Méthode magique : Fonction déjà implémenter et utiliser dans certaines conditionc (__construct)
