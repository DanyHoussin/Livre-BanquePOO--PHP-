<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$auteur1 = new Auteur("King", "Stephen", "04/04/2024") ;

echo var_dump($auteur1)."<br>";
echo "<br>";
$livre1 = new Livre("Ca", "04/04/1986", 1138, 20, $auteur1) ;
$livre2 = new Livre("Simetierre", "05/01/1983", 373, 15, $auteur1) ;
$livre3 = new Livre("le Fléau", "05/01/1978", 823, 14, $auteur1) ;
$livre4 = new Livre("Shining", "01/04/1977", 447, 16, $auteur1) ;

// echo $l2->afficherBibliographie()."<br/>"; 

echo var_dump($auteur1)."<br>";
echo "<br>";
echo var_dump($livre2)."<br>";
echo "<br>";
echo var_dump($livre3)."<br>";
echo "<br>";
echo $auteur1->afficherBibliographie()."<br/>";

?>