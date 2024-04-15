<?php
require_once ('Matiere.php');
if(empty($_GET['code'])||empty($_GET['intitule'])||empty($_GET['regime'])||empty($_GET['coefficient']))
echo"tous les champs est obligatoire";
else{
    if(!is_numeric($_GET['coefficient']))
    echo"champs coefficient doit étre numérique";
    else{
    #yejem hna il utilisateur ida5al des valeur 8altin wala haja howa ba3ad bech yesna3 bih objet lezem valeur il regime ikoun kima deklarineh fih constructeur heka aleh aista3melna Matiere::REG_MIXTE;
    $reg=Matiere::REG_MIXTE;
    if($_GET['regime']=='cc')
        $reg=Matiere::REG_CC;}
}

$mat=new Matiere(($_GET['code']),($_GET['intitule']),$reg,(float)$_GET['coefficient']);
echo $mat ->__get('code')."<br>";
echo $mat ->__get('intitule')."<br>";
echo $mat ->__get('regime')."<br>";
echo $mat ->__get('coefficient')."<br>";
echo $mat ->__get('credits')."<br>";

?>
