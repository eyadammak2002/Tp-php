<?php
include 'Matiere.php';
include 'MatiereManager.php';

    $donnees=array('code'=>$_POST['code'],'intitule'=>$_POST['intitule'],'regime'=>$reg,'coefficient'=>(float)$_POST['coef']);
    $mat=new Matiere($donnees);
    $db=new PDO('mysql:host=127.0.0.1;dbname=DBMatieres','eya','eya272002');
    $manager=new MatiereManager($db);
    echo "<br>*** modification du matiere***<br>";$
    $manager->update($matiere);
   


?>