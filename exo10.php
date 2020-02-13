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
$Montant_a_payer = 300 ;
$Montant_verse = 200 ;
$a_rembourser = $Montant_verse - $Montant_a_payer;
$valeur_monnaie = [10,5,2,1];
$monnaie = [];
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
    echo "Merci pour votre achat; je vous dois ".number_format($a_rembourser, 2,","," ") ." € je vous souhaite une bonne journée";
}

// <?php
//     /**
//      * 
//      * Calcule le rendu entre une somme versée et une somme à payer
//      *
//      * @param float $montant_a_payer le montant à payer
//      * @param float $montant_verse le montant versé par l'acheteur
//      * @return array le tableau des billets et/ou pièces à rendre
//      */
//     function rendreMonnaie(float $montant_a_payer, float $montant_verse):array
//     { 
//         if($montant_a_payer > $montant_verse){
//             throw new Error("Le montant à payer est supérieur à celui versé !");
//         }
//         //les différentes valeurs pouvant être rendues
//         $valeurs_faciales = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
//         //la différence entre ce qui est payé et ce qui est versé
//         $a_rendre =  $montant_verse - $montant_a_payer;
//         $monnaie = [];
        
//         //tant qu'il reste des sous à rendre
//         while($a_rendre > 0){
            
//             //si ce qui doit être a_rendre est supérieur ou égal au premier billet ou pièce du tableau
//             if($a_rendre >= $valeurs_faciales[0]){
//                 //je rajoute ce billet ou pièce à la monnaie a_rendre
//                 $monnaie[] = $valeurs_faciales[0];
//                 //et je soustrais au a_rendre la valeur ajoutée précédement à la monnaie
//                 $a_rendre = $a_rendre - $valeurs_faciales[0];
//                 //CORRECTION BUG : obligation d'arrondir le nouveau rendu
//                 //pour éviter le bug des arrondis impossibles en binaire
//                 $a_rendre = round($a_rendre, 2);
//             }
//             else{
//                 //la valeur faciale étant supérieure à ce qui reste à rendre
//                 //on supprime cette valeur du tableau
//                 array_shift($valeurs_faciales);
//             }
//         }

//         return $monnaie;
//     }

    // <?php

    // require("function.php");

    // $test = rendreMonnaie(152, 200);
    
    // $nb = 1;
    // foreach($test as $valeur){
    //     if(current($test) === next($test)){
    //         $nb++;
    //     }
    //     else{
    //         $type = ($valeur >= 5) ? "billet" : "pièce";
            
    //         $type.= ($nb > 1) ? "s" : "";
    //         $currency = ($valeur >= 1) ? "euro" : "centime";
            
    //         $valeur = ($valeur < 1) ? $valeur*100 : $valeur;
    //         $currency.= ($valeur > 1) ? "s" : "";

    //         echo $nb." ".$type." de ".$valeur." ".$currency;
    //         echo "<br>";
    //         $nb = 1;
    //     }
        
    // }