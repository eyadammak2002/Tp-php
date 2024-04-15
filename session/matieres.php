<?php
session_start();
$matieres=["eya"=>["PW2, Prog Web2, 2e-B", "TRC, Travail Collaboratif, 2e-B"],
"ali"=>["Algo2, Algorithmique2, 1e-B", "PRE, Programmation évenementielle, 1e-B"],
"mohamed"=>["Algo2, Algorithmique2, 1e-B", "PRE, Programmation évenementielle, 1e-B"]
]; 
?>
<head>
    <title>Page des matières de l'étudiant</title>
</head> 
<body>
    <?php
        if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) :
    ?> 
    <h5>Votre login est: <?= $_SESSION['login']?></h5>
    <h2>Liste des matières de Mr/Mme <?= $_SESSION["nom"].$_SESSION["prenom"]?></h2> 
    <?php
        $tabMat=$matieres[$_SESSION['indice']]; 
        foreach($tabMat as $value)
            echo $value.'<br>';
    ?>
    <a href="page-etudiant.php">Ma page d’accueil</a>
    <a href="deconnexion.php">Déconnexion</a>
    <?php else :
            echo "Les variables de sessions ne sont pas déclarées.";
        endif;
    ?>
</body>
</html>