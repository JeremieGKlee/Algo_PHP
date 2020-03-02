<!-- Exercice 2 
Soit le tableau suivant : $capitales = array
 ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); 
Réaliser un algorithme permettant d’afficher le tableau
 HTML suivant (notez que le nom du pays s’affichera en majuscule
  et que le tableau est trié par ordre alphabétique du nom de pays)
   grâce à une fonction personnalisée. 
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);  
Affichage 
Pays Capitale ALLEMAGNE Berlin FRANCE Paris ITALIE Rome USA Washington  -->



<?php
$capitales=["France"=>"Paris","Allemagne"=>"Berlin","Usa"=>"Washington","Italie"=>"Rome"];
function afficherTableHTML($capitales){
    $capitales=array_change_key_case($capitales, CASE_UPPER);
    ksort($capitales);
     echo"<table style='border:2px solid black; border-collapse:collapse;text-align:center;'><thead><tr><th >Pays</th>
     <th style='border:2px solid black ;width:400px;'>Capitale</th></tr></thead><tbody>";
    foreach ($capitales as $pays => $ville) {
        echo "<tr><td style='border:2px solid black;width:400px;'>".$pays."</td>
        <td style='border:2px solid black; width:400px;'>" .$ville."</td></tr>";       
    }
    echo"</tbody></table>";
}
afficherTableHTML($capitales);
?>