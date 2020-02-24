<?php

$coordonnees = ["Nom", "Prenom", "Email"];
$civilites = ["Masculin", "Féminin", "Autre"];
$formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo renderForm($coordonnees, $civilites, $formations);

function renderForm($coordonnees, $civilites, $formations){
    $resultat = "<form>";
    $resultat .= renderInput($coordonnees);
    $resultat .= renderRadio($civilites);
    $resultat .= renderChoices($formations);
    $resultat .= "<input type='submit' value='Envoyer'>";
    $resultat .= "</form>";
    return $resultat;
}

function renderInput($array){
    $resultat = "";
    foreach($array as $input){
        $resultat .= "<label>$input</label><br><input type='text' name='".mb_strtolower($input)."'><br>";
    }
    return $resultat;
}

function renderRadio($array){
    $resultat = "";
    foreach($array as $radio){
        $resultat .= "<input type='radio' name='civilite'><label>$radio</label><br>";
    }
    return $resultat;
}

function renderChoices($array){
    $resultat = "<select>";
    foreach($array as $option){
        $resultat .= "<option>$option</option>";
    }
    $resultat .= "</select><br>";
    return $resultat;
}