<?php
// Créer une fonction personnalisée convertirMajRouge()
//  permettant de transformer une chaîne de caractère
//   passée en argument en majuscules et en rouge.
// Vous devrez appeler la fonction comme suit :
//  convertirMajRouge($texte) ; Affichage
//   (si $texte = « Mon texte en paramètre »)
// MON TEXTE EN PARAMETRE
$ph="Mon texte en paramètre";
echo convertirMajRouge($ph);

function convertirMajRouge($toto){
    $newphrase = mb_strtoupper($toto); //tout en majuscule avec accent
    return "<p style='color:#FF0016;'>$newphrase</p>"; //on aurait pu mettre aussi une variable couleur $color= red; et style='color:$color
}

