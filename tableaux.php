<?php

// Déclarer un array :

//-- Array numérique:

// 1ere methode :

$prenom[0] = "Eric";
$prenom[1] = "Natacha";
$prenom[2] = "Nathan";
$prenom[3] = "Nolan";

//ou encore, dans cette methode les clé seront rempli automatiquement:

$prenom[] = "Eric"; // créera $prenom[0]
$prenom[] = "Natacha"; // créera $prenom[1]
$prenom[] = "Nathan"; // créera $prenom[2]
$prenom[] = "Nolan"; // créera $prenom[3]

// 2eme méthode :

// La fonction array permet de créer un array
$prenom = array('Eric','Natacha', 'Nathan', 'Nolan'); // array numéroté, les clés sont donc des chiffres

// Affichage d'une valeur d'un array:

echo $prenom[0].'<hr>'; // Le 0 correspond au premier indice de l'array $prenom , qui a comme valeur Eric. Les clés sont des chiffres dans un array numéroté.


// On ne peut pas afficher $prenom en faisant juste echo $prenom car c'est un array, une super variable qui contient plusieurs sous variables.

print_r($prenom);
echo "<hr>"; // la fonction print_r permet de voir le contenu d'un array, mais il est utilisé pour faire des debug uniquement.

//-- Array associatif:

$personne =
array(
    'nom' => 'Tanguy',
    'prenom' => 'Eric',
    'sexe' => 'masculin',
    'age' => 33
    ); // les clés sont des labels (strings), dans un array associatif

// Ou encore :

$personne['nom'] = 'Tanguy';
$personne['prenom'] = 'Eric';
$personne['sexe'] = 'masculin';
$personne['age'] = '33';

echo $personne['nom'];

echo '<hr>';

print_r($personne);

echo '<hr>';
// Afficher le contenu d'un array sous forme de tableau , avec une boucle for:

$nom = array('Eric','Natacha','Nathan','Nolan');
$personne = array('nom'=>'Tanguy','prenom'=>'Eric','Age'=> 33);

for ($numero = 0; $numero < 4; $numero++) // Avec une boucle for on peut afficher le contenu d'array sous forme de tableau mais il faut connaitre le nombre exacte des indices
{
  echo '<p>'.$nom[$numero].'</p>';

}

echo '<hr>';

// Afficher le contenu d'un array sous forme de tableau , avec une boucle foreach:

$nom = array('Eric','Natacha','Nathan','Nolan');
$personne = array('nom'=>'Tanguy','prenom'=>'Eric','Age'=> 33);

// Boucle foreach sur un array numérique:

foreach ($nom as $value) { // $nom est l'array, la variable $value prend la valeur chaque champs à chaque tour
  echo '<p> la valeur est '.$value.'</p>';
}

echo '<hr>';

// Boucle foreach sur un array associatif:

foreach($personne as $indice =>$valeur)
  // la variable $indice represente les clés de l'array, $valeur represente le contenu de la clé
{
  echo '<p> la valeur du champs '.$indice.' est '.$valeur.'</p>';
}
echo '<hr>';

// On utilise les balises <pre></pre> pour structurer l'affichage de l'array avec la fonction print_r, afin qu'il soit plus lisible
echo '<pre>';
print_r($nom);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($personne);
echo '</pre>';


// Recherche dans un tableau:

//1- Fonction array_keys_exists :

if(array_key_exists('nom', $personne)){
  // la fonction array_key_exists veut dire s'il la clé existe dans cet array, alors c'est vrai, il renvoi donc un boolean

  echo '<p>le nom d\''.$personne['prenom'].' est ' .$personne['nom'].'</p>';
}else{

  echo 'la clé n\'esxiste pas dans cet array!';
}

// la fonction array_key_exists permet de vérifier l'existance d'une clé dans un array

//2- Fonction in_array:

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
  // la fonction in_array fonctionne de la meme manière que array_key_exists sauf que celle-ci verifie l'existance de la valeur
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

elseif (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !'; // On affiche donc cette instruction car la valeur Cerise se trouve bien dans l'array fruis
}

//3- Fonction array_search:

$position = array_search('Fraise', $fruits);
// la fonction array_search fonctionne comme la fonction in_array sauf qu'elle renvoie la position de la valeur dans l'array, en d'autre terme, elle affiche le numéro ou le label de la clé qui contient cette valeur
echo '"Fraise" se trouve en position ' . $position . '<br /><br>';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;


// En résumé:

/*
Comme vous l'avez vu dans mes exemples, ils ne servent pas à stocker la même chose…

Les arrays numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.

Les arrays associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…

Les tableaux (ou arrays) sont des variables représentées sous forme de tableau. Elles peuvent donc stocker de grandes quantités d'informations.

Chaque ligne d'un tableau possède une clé (qui permet de l'identifier) et une valeur.

Il existe deux types de tableaux :

les tableaux numérotés : chaque ligne est identifiée par une clé numérotée. La numérotation commence à partir de 0 ;

les tableaux associatifs : chaque ligne est identifiée par une courte chaîne de texte.

Pour parcourir un tableau, on peut utiliser la boucleforque l'on connaît déjà, mais aussi la boucleforeachqui est dédiée aux tableaux.

Il existe de nombreuses fonctions permettant de travailler sur des tableaux et notamment d'effectuer des recherches
*/

?>
