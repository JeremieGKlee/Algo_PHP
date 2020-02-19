<?php
// Créer une fonction personnalisée convertirMajRouge()
//  permettant de transformer une chaîne de caractère
//   passée en argument en majuscules et en rouge.
// Vous devrez appeler la fonction comme suit :
//  convertirMajRouge($texte) ; Affichage
//   (si $texte = « Mon texte en paramètre »)
// MON TEXTE EN PARAMETRE
$ph="Mon texte en paramètre";
convertirMajRouge($ph);

function convertirMajRouge($toto){
    $newphrase = mb_strtoupper($toto); //tout en majuscule
    echo "<p style='color:#FF0016;'>$newphrase</p>";
}

