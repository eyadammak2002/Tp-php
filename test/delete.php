<?php
include 'Matiere.php';
include 'MatiereManager.php';


   
$i=$_GET['code'];
$db=new PDO('mysql:host=127.0.0.1;dbname=BD','eya','eya272002');
$manager=new MatiereManager($db);

echo "<br>*** suppression du matiere***<br>";
$mat=$manager->get($i);
if($mat)
$matiere=$manager->delete($mat);
else
echo "aucune matiére trouvée pour le supprimer";


  
if($matiere)
        echo "la matiére supprimée  : ".
            "<ul>".
            "<li> code: ".$matiere->getCode()."</li> ".
            "<li> intitule: ".$matiere->getIntitule()."</li> ".
            "<li> crédits: ".$matiere->getCredits()."</li> ".
            "</ul>";
        else
        echo "aucune matiére supprimée";

?>