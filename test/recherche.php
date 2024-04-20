<html>
    <body>
    <h1>voici la liste des matières</h1>

    <?php
        require_once ('Matiere.php');
        include ('MatiereManager.php');

        $db=new PDO('mysql:host=127.0.0.1;dbname=BD','eya','eya272002');
        $manager=new MatiereManager($db);
        echo"avant bouble foreach";
        echo "<ul>";
        foreach($db as $mat)
        {   echo"bouble foreach";
            echo"<li>".
            "code: ".$mat->getCode()."**".
            "intitule: ".$mat->getIntitule()."**".
            "crédits: ".$mat->getCredits()."</li>";

        }
        echo"</ul>";

    ?>
    </body>
</html>