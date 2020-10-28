<?php
//require_once 'classes/Fruit.php';
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
//
//require_once 'classes/Compte.php';
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

//require_once "classes/Personne.php";
//
//$philippe = new Personne("Philippe", 37);
//echo $philippe;
//echo "<h1>".Personne::$compteur."</h1>";
//echo "<h1>".Personne::COULEUR."</h1>";
//
//$adele = new Personne("Adele", 36);
//echo $adele;
//echo "<h1>".Personne::$compteur."</h1>";
//
////$philippe->seMarier($adele);
//
////echo $philippe;
////echo $adele;

require_once 'classes/abstracts/Animal.php';
require_once 'classes/abstracts/Felin.php';
require_once 'classes/abstracts/Lion.php';
require_once 'classes/abstracts/Tigre.php';

//$animal = new Animal("Vert", 55);
//$animal->manger();
//$felin = new Felin("Vert", 55);

$lion = new Lion("Mauve", 200);
echo $lion;

$tigre = new Tigre("Orange Zebré", 300);
echo $tigre;

