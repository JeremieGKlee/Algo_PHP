<!-- Exercice 9
Créer une fonction personnalisée permettant d’afficher
des boutons radio avec un tableau de valeurs
en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio); -->
<?php
$nomsRadio =["Monsieur","Madame","Mademoiselle"];
function afficherRadio($nomsRadio){
    echo "<form>";
    foreach($nomsRadio as $value){ 
        echo "<input type='radio' name='genre'><label>$value</label></br>";
    }
    echo "</form>";
}    
afficherRadio($nomsRadio);