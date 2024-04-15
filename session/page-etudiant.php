<?php
session_start();
if(date("H")<18)
    $bienvenue="Bonjour";
else
    $bienvenue="Bonsoir";
?>
PROGRAMMATION WEB 2 ---- NOUHA CHAÂBEN KAMMOUN
<html>
<head>
<title>Page de la session etudiant</title>
</head>
<body>
<?php
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) :?>
<h3><?= $bienvenue ." et bienvenue ".$_SESSION['nom']." dans votre espace personnel"?></h3> <h5>Votre login est: <?= $_SESSION['login']?></h5>
<a href="mes_matieres.php">Voir Mes matières</a>
<a href="Quitter.php">Déconnexion</a>
<?php else :
echo 'Les variables de sessions ne sont pas déclarées.';
endif;?>
</body>
</html>