<?php
$prixarticle=9.99;
$quantite=5;
$taux_de_tva=0.2;
$facture_HT=$prixarticle*$quantite;
$Facture_TTC=$facture_HT*(1+$taux_de_tva);
echo "Prix unitaire de l’article : ".$prixarticle."<br>";
echo "Quantité : ".$quantite."<br>";
echo "Taux de TVA : ".$taux_de_tva."<br>";
echo "Le montant de la facture à régler est de : ".number_format($Facture_TTC,2,","," ")." €";
