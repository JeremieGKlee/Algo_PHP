<!-- Exercice 6 
Créer une fonction personnalisée permettant de remplir
 une liste déroulante à partir d'un tableau de valeurs. 
Exemple : $elements = array("Monsieur","Madame","Mademoiselle");
 alimenterListeDeroulante($elements); 
Affichage  -->
 
<?php
// $elements =["Monsieur","Madame","Mademoiselle"];
// function alimenterListeDeroulante($elements){
//     $i=0;
//     echo "<select>";
//     while ($i <= 2){ 
//         echo "<option>".$elements[$i]."</option>";
//         $i++;      
//     }
//     echo "</select>";
// }
// echo alimenterListeDeroulante($elements);

// 
$elements =["Monsieur","Madame","Mademoiselle"];
function alimenterListeDeroulante($elements){
    echo "<select>";
    foreach ($elements as $value){ 
        echo "<option>".$value."</option>";     
    }
    echo "</select>";
}
echo alimenterListeDeroulante($elements);
