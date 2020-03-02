<?php
$age_enfant=10;

if ($age_enfant == 6 && $age_enfant <= 7)
{
echo "L’enfant qui a $age_enfant ans appartient à la catégorie « Poussin »";
}
elseif($age_enfant == 8 && $age_enfant <= 9)
{
echo "L’enfant qui a $age_enfant ans appartient à la catégorie « Pupille »";
}
elseif($age_enfant == 10 && $age_enfant <= 11)
{
echo "L’enfant qui a $age_enfant ans appartient à la catégorie « Minime »";
}
elseif($age_enfant >= 12)
{
echo "L’enfant qui a $age_enfant ans appartient à la catégorie « Cadet »";
}
elseif($age_enfant < 6 )
{
echo "la catégorie n’est pas gérée, merci de le préciser.";
}
