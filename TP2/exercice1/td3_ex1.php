
<?php
require_once 'Matiere.php'; // Inclusion du fichier contenant la classe Matiere
//initialisation du filiére 9bal il création des objets 5ater deja howa attributs static mouch teba3 il objet
Matiere::$filiere='IG';

// Création d'une matière avec le régime REG_MIXTE
$matiere = new Matiere("PHP02", "programmation web 2", Matiere::REG_MIXTE, 2);
var_dump($matiere);
echo'<hr>';

// Modification du régime en utilisant le setter correspondant
// he4i ki get il set lola. $matiere->setRegime(Matiere::REG_CC);
$matiere->__set('regime',Matiere::REG_CC);
//mafamech far9 bin t3aytelha bil classe wala bil objet 5ater hiya constante
//$matiere->setRegime($matiere::REG_CC);
var_dump($matiere);


Matiere::setFiliere("2e-IB");
echo " \nFilière après modification: " . Matiere::getFiliere();
//echo " \nFilière après modification: " . Matiere::$filiere;

?>
