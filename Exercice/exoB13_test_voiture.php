<?php
include "exoB13_class_voiture.php";

$v1 = new Voiture ("Peugeot" ,"408",5);
$v2 = new Voiture ("Citroën","C4",3);


echo $v1;
echo $v2;
$v1->demarrer();
$v1->accelerer();
$v1->ralentir();
$v1->stopper();
