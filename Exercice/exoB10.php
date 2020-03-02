<?php
// Exercice 10
// En utilisant l’ensemble des fonctions personnalisées
//  crées précédemment, créer un formulaire
// complet qui contient les informations suivantes :
//      champs de texte avec nom, prénom, adresse e-mail,
// ville, sexe et une liste de choix parmi lesquels on pourra
//  sélectionner un intitulé de formation :
// « Développeur Logiciel », « Designer web »,
//  « Intégrateur » ou « Chef de projet ».
// Le formulaire devra également comporter
//  un bouton permettant de le soumettre à un traitement de
// validation (submit).

$identification = ["Nom", "Prénom", "Adresse e-mail", "Ville"];
$sexe = ["Masculin","Féminin","Indefini"];
$intitulé_de_formation = ["Développeur Logiciel",
                            "Designer web",
                            "Intégrateur",
                            "Chef de projet"];
echo "<form> Formulaire";
function afficherInput($identification){
    echo"<fieldset style ='background-color:#F5F5F5;width:200px;border:none;'>";
    foreach($identification as $value){
        echo"<label style = 'display:block;width:200px;'>".$value."</label><input type='text'><br>";
    }
    echo"</fieldset></br>";
}
afficherInput($identification);

function afficherRadio($sexe){
    echo "<fieldset style ='background-color:#F5F5F5;width:200px;border:none;'>";
    foreach($sexe as $value){ 
    echo "<input type='radio' name='genre'><label>".$value."</label></br>";
    }
    echo "</fielset>";
}    
afficherRadio($sexe);

function alimenterListeDeroulante($intitulé_de_formation){
    echo"<Fieldset style ='background-color:#F5F5F5;width:200px;border:none;'><select>";
    foreach ($intitulé_de_formation    as $value){
        echo"<option>".$value."</option>";
    }
    echo "</select></fieldset>";
}
alimenterListeDeroulante($intitulé_de_formation);

echo "<input type='submit' value='Envoyer'>";
echo "</form>";
