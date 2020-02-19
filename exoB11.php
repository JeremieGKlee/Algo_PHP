<?php
// Exercice 11
// Ecrire une fonction personnalisée qui affiche
//  une date en français (en toutes lettres) à partir d’une
// chaîne de caractère représentant une date.
// Exemple :
// formaterDateFr("2018-02-23");
// Affichage
// vendredi 23 février 2018

$dateChiffre = "2018-02-23";
setlocale(LC_TIME, 'fr_FR.utf8');
echo 'Nous sommes le '.strftime('%A %d %B %Y', strtotime($dateChiffre));


// function formaterDateFr($dateChiffre){
// }

