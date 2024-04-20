<?php
include 'Matiere.php';
include 'MatiereManager.php';

    $db=new PDO('mysql:host=127.0.0.1;dbname=DBMatieres','eya','eya272002');
    $manager=new MatiereManager($db);
    echo "<br>*** recherche du matiere***<br>";
    $mat=$manager->get($_POST['code']);
    if(!empty($mat)){
        echo"la matiére recherché 
            <ul>".
            "<li> code: ".$mat->getCode()."</li>".
            "<li> intitule: ".$mat->getIntitule()."</li>".
            "<li> regime: ".$mat->getRegime()."</li>".
            "<li> coefficient: ".$mat->getCoefficient()."</li>".
            "<li> crédits: ".$mat->getCredits()."</li>".
            "<ul>";
    }
    else
    echo "matiére inexistante";

    
   


?>