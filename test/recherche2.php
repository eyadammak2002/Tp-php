
<?php
    require_once ('Matiere.php');
    include ('MatiereManager.php');
        $i=$_POST['code'];
        $db=new PDO('mysql:host=127.0.0.1;dbname=BD','eya','eya272002');
        $manager=new MatiereManager($db);

        echo"<br>**recherche d'une matiére**<br>";
        $mat=$manager->get($i);
        if($mat)
        echo "la matiére recherchée : ".
            "<ul>".
            "<li> code: ".$mat->getCode()."</li> ".
            "<li> intitule: ".$mat->getIntitule()."</li> ".
            "<li> regime: ".$mat->getRegime()."</li> ".
            "<li> coefficient: ".$mat->getCoefficient()."</li> ".
            "<li> crédits: ".$mat->getCredits()."</li> ".
            "</ul>";
        else
        echo "aucune matiére trouvée";

?>
   