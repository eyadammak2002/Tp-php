<?php
    require_once ('Matiere.php');
    include ('MatiereManager.php');


    $db_name='mysql:host=127.0.0.1;dbname=BDMatieres';
    $user_name='eya';
    $user_password='eya272002';
    $db = new PDO($db_name, $user_name, $user_password);
    if($db){
        echo "connection réussi" ;
    }
    else
    echo "connect echoué" ;
?>

   