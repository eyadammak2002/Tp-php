<?php
include 'Matiere.php';
include 'MatiereManager.php';


    $db=new PDO('mysql:host=127.0.0.1;dbname=DBMatieres','eya','eya272002');
    $manager=new MatiereManager($db);
    echo "<br>*** suppression du matiere***<br>";
    $mat=new Matiere(array('code'=>$_POST['code']));
    $manager->delete($mat);
   


?>