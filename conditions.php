<?php


$age = 12;

// Condition if

if ($age == 12) {
  echo 'Salut Gamin <hr>';
}


// Condition if...else

$age = 20;

if ($age <= 12) {
  echo 'Salut Gamin <hr>';

}else{

  echo 'Bonjour Adulte <hr>';
}

// Condition if...elseif..else

$age = 14;

if ($age <= 12) {
  echo 'Salut Gamin <hr>';

}elseif($age == 14){

  echo 'Tu as ' .$age . ' ans <hr>';

}else{

  echo 'Bonjour adulte';

}

// Condition avec des booleans

$adulte = true;

if ($adulte) { // Si adulte == true, on rentre dans la condition

  echo 'C\'est un adulte <hr>';
}else{

  echo 'C\'est un mineur <hr>';
}



if (!$adulte) { // Si adulte !== true, on rentre dans la condition, en l'occurence ici $adulte == true dponc on ne rentre pas dans la condition mais uniquement dans le else

  echo 'C\'est un mineur <hr>';

}else{

  echo 'C\'est un adulte <hr>';
}

// Double condition avec AND et OR

// Avec AND et && :

$nom = 'Bernard';

if ($adulte AND $nom == 'Bernard' ) { // Si $adulte == true et $nom == 'Bernard', on rentre dans la condition, il faut que les 2 conditions soient vrais

  echo 'C\'est un adulte qui s\'appelle '.$nom.'<hr>';

}else{

  echo 'Ce n\'est pas un adulte <hr>';
}

$age = 8;
$langue = "anglais";


if ($age <= 12 AND $langue == "français")
{
    echo "Bienvenue sur mon site !";
}
elseif ($age <= 12 AND $langue == "anglais")
{
    echo "Welcome to my website!<hr>";
}

// On peut aussi l'ecrire sous la forme suivante :

if ($adulte && $nom == 'Jean' ) { // && remplace AND

  echo 'C\'est un adulte qui s\'appelle '.$nom.'<hr>';

}else{

  echo 'Il ne s\'appelle pas '.$nom.' <hr>';
}

// Avec OR et ||:

$adulte = false;

if ($adulte OR $nom == 'Bernard' ) { // Si $adulte == true Ou $nom == 'Bernard', on rentre dans la condition, il faut qu'il y ai au moins une condition qui soit vrai

  echo 'C\'est un adulte qui s\'appelle '.$nom.'<hr>';

}else{

  echo 'Ce n\'est pas un adulte <hr>';
}

if ($adulte || $nom == 'Jean' ) { // On ne rentre pas dans la condition car les 2 sont false

  echo 'Ce n\'est pas un adulte qui s\'appelle '.$nom.'<hr>';

}else{

  echo 'C\'est un adulte qui ne s\'appelle pas '.$nom.' <hr>';
}

// Couper les balises PHP dans une condition :


if (!$adulte) // Cette manière de procéder permet d'inserer du contenu html uniquement si la condition est vrai
{
  ?>

  <p>Je ne suis pas un adulte mais bien un mineur<hr></p>

  <?php
}

// Condition Switch:

$age = 18;

switch ($age) { // le switch est une alternative au if...elseif...else, on l'utilise quand on a plusieurs conditions sur une variable, mais le problème du switch , c'est qu'il ne marche que pour l'égalité, pas pour les autres symnoles <> >= <= !=
  case '10':
    echo 'Tu es encore trop jeune';
    break;
  case '16':
    echo 'Tu n\'as pas encore '.$age.'ans<hr>';
    break;
    case '18':
    echo 'Tu es en age vu que tu as '.$age.'ans<hr>';
    break;
  default:
    echo 'Quand tu aura '.$age.' ans tu pourras revenir';
    break;
}

// Condition ternaire :

// Version if..else
$age = 24;

if ($age >= 18)
{
  $majeur = true;
}
else
{
  $majeur = false;
}

// Version ternaire

$age = 24;

$majeur = ($age >= 18) ? true : false; // ? remplace le if et : remplace le else

// En résumé :

/*
Les conditions permettent à PHP de prendre des décisions en fonction de la valeur des variables.

La forme de condition la plus courante estif…elseif…elsequi signifie « si »… « sinon si »… « sinon ».

On peut combiner des conditions avec les mots-clésAND(« et ») etOR(« ou »).

Si une condition comporte de nombreuxelseif, il peut être plus pratique d'utiliserswitch, une autre forme de condition.

Les ternaires sont des conditions condensées qui font un test sur une variable, et en fonction des résultats de ce test donnent une valeur à une autre variable. Elles sont cependant plus rarement utilisées.




*/
?>
