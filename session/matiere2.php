<?php
session_start();
$matieres=["mobe"=>["PW2, Prog Web2, 2e-B", "TRC, Travail Collaboratif, 2e-B"],
"albe"=>["Algo2, Algorithmique2, 1e-B", "PRE, Programmation évenementielle, 1e-B"]]; ?>
<head><title>Page des matières de l'étudiant</title></head> <body>
<?php
echo "<br>" . time();
$duree = time() - $_SESSION['time-connection'];
echo "<br>" . $duree;
if ($duree > 120) {
    header("location:quitter.php");
} elseif (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    ?>
    <h5>Votre login est: <?= $_SESSION['login']?></h5>
    <h2>Liste des matières de Mr/Mme <?= $_SESSION["nom"]; ?></h2>
    <?php
    $tabMat = $matieres[$_SESSION['indice']];
    foreach ($tabMat as $value) {
        echo $value . '<br>';
    }
    ?>
    <a href="page_etudiant.php">Ma page d’accueil</a>
    <a href="Quitter.php">Déconnexion</a>
    <?php
} else {
    echo 'Les variables de sessions ne sont pas déclarées.';
}
?>
