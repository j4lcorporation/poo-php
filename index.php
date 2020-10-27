<?php
//require_once 'Fruit.php';
//
//$nom = "Joachim";//Variable de type primitif
//var_dump($nom);
//
//$orange = new Fruit();// ==> Une instance de Fruit
////$orange->nom = "ORANGE";
////$orange->couleur = "Jaune";
//var_dump($orange);
//
//$autreOrange = new Fruit();// ==> Une instance de Fruit
////$autreOrange->nom = "ORANGE";
////$autreOrange->couleur = "Jaune";
//var_dump($autreOrange);
//
//var_dump($autreOrange === $orange);

//require_once 'Compte.php';
//
//$compteLasso = new Compte("C001");
//
//var_dump($compteLasso);
//
//echo "<h1>".$compteLasso->getNumero()."</h1>";
//echo "<h1>".$compteLasso->getSolde()."</h1>";
//
//$compteLasso->setSolde(-100);
//
//$nom = "Joachim";
//echo "<h1>{$nom}</h1>";
//echo "<h1>{$compteLasso}</h1>";

require_once "Personne.php";

$philippe = new Personne("Philippe", 37);
$adele = new Personne("Adele", 36);



$philippe->seMarier($adele);

