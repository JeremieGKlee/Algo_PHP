<?php
$phrase="Notre formation DL commence aujourd'hui";
$word="aujourd'hui";
$newword="demain";
$newphrase = str_replace($word,$newword,$phrase);
echo "l'ancienne prhase est $phrase la nouvelle phrase est $newphrase";