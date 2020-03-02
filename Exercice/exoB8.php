<!-- Exercice 8
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N 
fois à l’écran.
Exemple :
repeterImage($url,4); -->
<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nb = 4;
function repeterImage($url,$nb){
    $i=0;
    while ($i < $nb){
       echo "<img src='$url'>";
        $i++;
    }
}
repeterImage($url,$nb);