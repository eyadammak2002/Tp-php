<?php
session_start();
if(date("H")<18)
    $bienvenue="Bonjour";
else
    $bienvenue="Bonsoir";
?>

<html>
<head>
    <title>Page de la session etudiant</title>
</head>
<body>
    <?php
        if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) :
    ?>
    <h3><?= $bienvenue ." et bienvenue ".$_SESSION['nom']." ".$_SESSION["prenom"]." dans votre espace personnel"?></h3> 
    <h5>Votre login est: <?= $_SESSION['login']?></h5>
    <a href="matieres.php">Voir Mes matières</a>
    <a href="deconnexion.php">Déconnexion</a>
    <?php else :
            echo 'Les variables de sessions ne sont pas déclarées.';
        endif;
    ?>
</body>
</html>