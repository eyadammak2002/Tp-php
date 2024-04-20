<?php
require_once ('Matiere.php');
include ('MatiereManager.php');

/*if(empty($_GET['code'])||empty($_GET['intitule'])||empty($_GET['regime'])||empty($_GET['coefficient'])||empty($_GET['credits']))
echo"tous les champs est obligatoire";
else{
    if(!is_numeric($_GET['coefficient']))
    echo"champs coefficient doit étre numérique";
    else{
    #yejem hna il utilisateur ida5al des valeur 8altin wala haja howa ba3ad bech yesna3 bih objet lezem valeur il regime ikoun kima deklarineh fih constructeur heka aleh aista3melna Matiere::REG_MIXTE;
    $reg=Matiere::REG_MIXTE;
    if($_GET['regime']=='cc')
        $reg=Matiere::REG_CC;}
}*/

$mat=new Matiere(($_GET['code']),($_GET['intitule']),(float)$_GET['credits']);



$db=new PDO('mysql:host=127.0.0.1;dbname=BD','eya','eya272002');
$manager=new MatiereManager($db);
echo "<br>*** insertin matiere***<br>";
$manager->add($mat);


?>
