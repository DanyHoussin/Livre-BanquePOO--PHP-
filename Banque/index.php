<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$titulaire1 = new Titulaire("Houssin", "Dany", "08/02/2004", "Strasbourg");
$titulaire2 = new Titulaire("Shiro", "Kamel", "01/04/2000", "Strasbourg");

$compte1 = new CompteB("Livret A", 1400, "$", $titulaire1);
$compte2 = new CompteB("Compte Courant", 200, "$", $titulaire2);
$compte3 = new CompteB("Compte Courant", 500, "$", $titulaire1);
$compte4 = new CompteB("Epargne", 3000, "$", $titulaire1);

echo $compte1->getSolde()."<br/>";
echo $compte1->crediterCompte(140)."<br/>";
echo $compte1->debiterCompte(40)."<br/>";

echo $compte2->getSolde()."<br/>";
echo $compte1->envoyerVirement(140, $compte2)."<br/>";
echo $titulaire1->infoTitulaire()."<br/>";

echo $titulaire2->infoTitulaire()."<br/>";
echo $compte2->infoCompte()."<br/>";