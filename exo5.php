<?php
$prixenfranc=10000;
$prixeneuro=$prixenfranc/6.55957;
echo "Montant en francs : ".$prixenfranc."<br>";
echo $prixenfranc. " francs = " .number_format($prixeneuro,2,","," ")." €"; // round($prixeneuro,2)
// echo $prixeneuro;
