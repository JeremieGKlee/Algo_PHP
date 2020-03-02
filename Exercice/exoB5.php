<!-- Exercice 5 
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. 
Exemple : $nomsInput = array("Nom","Prénom","Ville"); afficherInput($nomsInput); 
Affichage 
  -->
  <?php
$nomsInput=["Nom","Prénom","Ville"];

function afficherInput($nomsInput){
    echo "<fieldset style='background-color:#F5F5F5;width:200px;border:none;'><form> "
    .$nomsInput[0]."<br/> <input type ='text' name='Nom'><br>"
    .$nomsInput[1]. "<br/> <input type='text' name='Prénom'><br/>"
    .$nomsInput[2]."<br/><input type='text' name='Ville'><br/></form></fieldset>";
}
afficherInput($nomsInput);
?>