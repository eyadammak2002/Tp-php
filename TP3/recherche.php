<html>
    <body>
    <h1>voici la liste des matières</h1>

    <?php
        require_once ('Matiere.php');
        include ('MatiersManager.php');

        $db=new PDO('mysql:host=127.0.0.1;dbname=DBMatieres','eya','eya272002');
        $manager=new MatiereManager($db);

        echo "<ul>";
        foreach($T as$mat)
        {
            echo"<li>".
            "code: ".$mat->getCode()."**".
            "intitule: ".$mat->getIntitule()."**".
            "regime: ".$mat->getRegime()."**".
            "coefficient: ".$mat->getCoefficient()."**".
            "crédits: ".$mat->getCredits()."</li>";

        }
        echo"</ul>";

    ?>
    </body>
</html>