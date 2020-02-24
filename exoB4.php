<?php
$capitales=['France'=>'Paris','Allemagne'=>'Berlin','Usa'=>'Washington','Italie'=>'Rome'];
function afficherTableHTML($capitales){
    $capitales=array_change_key_case($capitales, CASE_UPPER);
    ksort($capitales);
     echo"<table ; style= 'border-collapse:collapse;'><thead><tr><th style='border:2px solid black;width:400px;'>Pays</th>
     <th style='border:2px solid black;width:400px;'>Ville</th>
     <th style='border:2px solid black;width:400px;'>Lienwiki</th></tr></thead><tbody>";
    foreach ($capitales as $pays => $ville) {
        echo "<tr><td style='border:2px solid black;width:400px;text-align:center;'>".$pays."</td>
        <td style='border:2px solid black;width:400px;text-align:center;'>" .$ville."</td>
        <td style='border:2px solid black;width:400px;text-align:center;'><a href='https://fr.wikipedia.org/wiki/".$ville." ' target=_blank>Lien<a/></td></tr>";       
    }
    echo"</tbody></table>";
}
afficherTableHTML($capitales);
?>