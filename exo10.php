<!-- A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, pièces de 2 € et 1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € -->
<?php
$Montant_a_payer = 200;
$Montant_verse = 200 ;
$a_rembourser = $Montant_verse - $Montant_a_payer;
if($Montant_a_payer > $Montant_verse)
{
    echo "Excusez-moi, il y a un problème; cela coûte " .number_format($Montant_a_payer, 2,","," ") ."€ et vous me donnez " .number_format($Montant_verse, 2,","," ") ."€. Il manque : " .number_format(($Montant_a_payer-$Montant_verse), 2,","," ") ." €. Voulez-vous payer le reste où je mets de coté votre achat?";
}
else if($a_rembourser == 0)
{
    echo "Merci pour votre achat, je vous souhaite une bonne journée";
}
else
{
   

    function rendreMonnaie($facture, $donne_par_client):array
    { 
       
        
        $a_rembourser = $donne_par_client - $facture;
        $valeur_monnaie = [10,5,2,1];
        $monnaie = [];
        while($a_rembourser > 0){
            if($a_rembourser >= $valeur_monnaie[0]){
                $monnaie[] = $valeur_monnaie[0];
                $a_rembourser = $a_rembourser - $valeur_monnaie[0];
               
            }
            else{
                array_shift($valeur_monnaie);
            }
        }

        return $monnaie;
    }
    echo "Merci pour votre achat; je vous dois ".number_format($a_rembourser, 2,","," ") ." €. <br> Voici votre monnaie <br>";

    $rendu = rendreMonnaie($Montant_a_payer, $Montant_verse);
    
    $nb = 1;
    foreach($rendu as $valeur){
        if(current($rendu) === next($rendu)){
            $nb++;
        }
        else{
            $type = ($valeur >= 5) ? "billet" : "pièce";
            
            $type.= ($nb > 1) ? "s" : "";
            $currency = ($valeur >= 1) ? "euro" : "centime"; 
            $currency.= ($valeur > 1) ? "s" : "";

            echo $nb." ".$type." de ".$valeur." ".$currency;
            echo "<br>";
            $nb = 1;
        }
    }
    echo "Bonne journée ";
}