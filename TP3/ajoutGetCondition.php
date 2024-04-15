
    <?php
    if (isset($_GET['code']) && isset($_GET['intitule']) && isset($_GET['regime']) && isset($_GET['coefficient']) && isset($_GET['credits']))
     {
        $code = $_GET['code'];
        $intitule = $_GET['intitule'];
        $regime = $_GET['regime'];
        $coefficient = $_GET['coefficient'];
        $credits = $_GET['credits'];

        echo "<p>Voici les données :<br>Le code de la matière est : <strong>$code</strong><br>"
           . "Son intitulé est : <strong>$intitule</strong><br>"
           . "Son Régime est : <strong>$regime</strong><br>"
           . "Son Coefficient est : <strong>$coefficient</strong><br>"
           . "Son Crédits est : <strong>$credits</strong></p>";
    } 
    else
     
        echo "<p>Les données du formulaire n'ont pas été soumises.</p>";
    
    ?>

