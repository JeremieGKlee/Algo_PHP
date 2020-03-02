<!-- Exercice 7
Créer une fonction personnalisée permettant de générer
 des cases à cocher. On pourra préciser dans
le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif
 clé => valeur avec 3 entrées.
  Berlin FRANCE Paris ITALIE Rome USA Washington  -->
<?php
// $elements =["Choix 1","Choix 2","Choix 3"];
// function genererCheckbox($elements){
//     echo "<form>";
//     foreach ($elements as $value){ 
//     echo "<input type='checkbox' id='scales' name='scales'
//     <label for='scales'>".$value."</label> </br>";
//     }
//     echo "</form>";
// }
// echo genererCheckbox($elements);

$elements =["Choix 1"=>"","Choix 2"=>"checked","Choix 3"=>""];
function genererCheckbox($elements){
    echo "<form>";
    foreach($elements as $choix => $checked){ 
        echo "<input type='checkbox' $checked><label>$choix</label> </br>";
    }
    echo "</form>";
}    
genererCheckbox($elements);