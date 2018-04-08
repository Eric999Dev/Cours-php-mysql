<?php

// Une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur. En général, dès que vous avez besoin d'effectuer des opérations un peu longues dont vous aurez à nouveau besoin plus tard, il est conseillé de vérifier s'il n'existe pas déjà une fonction qui fait cela pour vous. Et si la fonction n'existe pas, vous avez la possibilité de la créer.

// Traitement des chaines de caractères:

// - fonction strlen(); longueur d'une chaîne

// cette fonction retourne la longueur d'une chaine de caractères, c'est à dire le nombre de lettres et de chiffres dont elle est constituée (espace compris)

//-----------------------------------------------------
//Les fonctions prêtes à l'emploi de PHP

$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);


echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase.'<hr>';

// - fonction str_replace(); rechercher et remplacer

// cette fonction permet de remplacer des mots ou lettre par autre chose, ici on remplace la lettre b par la lettre p, dans la phrase bim bam boum

$ma_variable = str_replace('b', 'p', 'bim bam boum');

echo $ma_variable . '<hr>'; // On affiche pim pam poum

// - fonction str_shuffle(); mélanger les lettres


$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);

echo $chaine; //On affiche les memes lettres que le contenu de la variables mais dans ordre aléatoire
echo '<hr>';
// - fonction strtolower(): écrire en minuscules


$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);

echo $chaine; // On affiche la meme phrase en miniscule

echo '<hr>';
// - fonction strtoupper(): écrire en majuscule

$chaine = 'comment ca je crie trop fort ???';
$chaine = strtoupper($chaine);

echo $chaine; // On affiche la meme phrase en majuscule

echo '<hr>';
// - fonction date(): récupérer la date

// Si vous voulez afficher l'année, il faut donc envoyer le paramètre Y à la fonction :

$annee = date('Y');

echo '<p>'.$annee.'</p>';

// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
echo '<hr>';
//-----------------------------------------------------
//Créer ses propres fonctions

// Premier exemple :fonction  dis bonjour au Monsieur

function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël');

// Deuxième exemple : calculer le volume d'un cône

// Calcul du volume d'un cône de rayon 5 et de hauteur 2
$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

// Calcul du volume d'un cône de rayon 3 et de hauteur 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';

// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

// Regardez bien la fonction, il y a l'instruction :return $volume;.
// Cette instruction indique ce que doit renvoyer la fonction. Ici, elle renvoie le volume. Si vous aviez tapéreturn 15, ça aurait à chaque fois affiché un volume de 15 (c'est un peu idiot j'en conviens, mais faites l'essai !).

// La fonction renvoie une valeur, que l'on doit donc récupérer dans une variable :

$volume = VolumeCone(3, 1);

// Ensuite, on peut afficher ce que contient la variable à l'aide d'une instructionecho.

echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume.'<hr>';

/*
En résumé
Les fonctions sont des blocs de code qui exécutent des instructions en fonction de certains paramètres.

Les fonctions ont généralement une entrée et une sortie. Par exemple, si on donne la valeur 4 à la fonction de calcul du cube, celle-ci renvoie 64 en sortie.

PHP propose des centaines et des centaines de fonctions prêtes à l'emploi pour tous types de tâches : envoyer un e-mail, récupérer l'heure, crypter des mots de passe, etc.

Si PHP ne propose pas la fonction dont on a besoin, il est possible de la créer avec le mot-cléfunction.

*/
?>
