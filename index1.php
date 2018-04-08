<?php
$note = 10;

switch ($note) {
    case '5':
        echo "C'est un multiple de 10";
        break;
    case '10':
        echo "Ce n'est pas un multiple de $note";
        break;
    
    default:
        echo "Les nombres renseignés ne sont pas égales à $note";
        break;
}



?>