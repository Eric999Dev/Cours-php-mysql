<?php

$ageDuVisiteur = 10;
$ageDuVisiteur = 35;

echo $ageDuVisiteur . '<hr>';

$message = 'Bonjour ! <hr>';

echo $message;

$estCeVrai = true;

echo "le visiteur a $ageDuVisiteur ans <hr>.";

$prix = 25;
$quantite = 20;


$total = $prix * $quantite;

echo $total .'<hr>';


$total = $prix - $quantite;

echo $total .'<hr>';


$total = $prix / $quantite;

echo $total .'<hr>';


$total = $prix+$quantite;

echo 'Cela coute ' .$total .' euros <hr>';

$total = $prix % $quantite;

echo 'modulo est =  '.$total .'<hr>';

/*
En résumé :

Une variable est une petite information qui reste stockée en mémoire le temps de la génération de la page PHP. Elle a un nom et une valeur.

Il existe plusieurs types de variables qui permettent de stocker différents types d'informations : du texte (string), des nombres entiers (int), des nombres décimaux (float), des booléens pour stocker vrai ou faux (bool), etc.

En PHP, un nom de variable commence par le symbole dollar :$agepar exemple.

La valeur d'une variable peut être affichée avec l'instructionecho.

Il est possible de faire des calculs mathématiques entre plusieurs variables : addition, soustraction, multiplication…
*/
?>
