<?php

// Boucle While :

$repetitions = 0;

while ($repetitions < 10) { // Tant que $repetitions est inférieur ou egale à 10 je rentre dans la condition
  echo '<p>Je dois reviser tout les jours '.$repetitions.' fois mon cours de PHP<hr></p>'; // j'affiche ce paragraphe autant de fois que je rentre dans la condition, ici on l'affichera 10 fois. Une fois les 10 fois atteint, on sort de la condition car au dixième tours vu que $repetitions est égale à 10 du coup on ne rentre plus dans la condition
  $repetitions++; // j'incremente de 1 la valeurs de $repetitions à chaque tours de sorte à ce que la boucle ne soit pas infinie et plante le navigateur. Peut aussi s'ecrire $repetition = $repetitions + 1;
}

// Autres exemples :

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 50)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

// Boucle For :

for($repetitions = 0; $repetitions < 10; $repetitions++){ // Contrairement à la boucle while qui necessite que la variable soit créée au préalable , la boucle for permet de creer et initialiser la variable lors de l'instruction $repetitions = 0, d'inserer la condition $repetitions < 10 et d'inserer l'incrémentation $repetitions++
  echo '<p> C\'est le tour '.$repetitions.' de ma boucle For</p>';
}

/*
En résumé :

Les boucles demandent à PHP de répéter des instructions plusieurs fois.

Les deux principaux types de boucles sont :

while : à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée ;

for : à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois.

L'incrémentation est une technique qui consiste à ajouter 1 à la valeur d'une variable. La décrémentation retire au contraire 1 à cette variable. On trouve souvent des incrémentations au sein de bouclesfor.



*/

?>
