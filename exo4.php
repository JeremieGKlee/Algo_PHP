<?php
$phrase="Engage le jeu que je le gagne";
$newphrase = str_replace(" ","",$phrase);
$newphrase2 = strrev($newphrase);
// $newphrase = strtolower($newphrase); //tout en minuscule
// $newphrase = strtoupper($newphrase); //tout en majuscule
if (strcasecmp($newphrase, $newphrase2) == 0) {
    echo "Cette phrase est un palindrome";
}else{
    echo "Cette phrase n'est pas un palindrome";
}

//Comparaison insensible à la casse de chaînes binaires.
