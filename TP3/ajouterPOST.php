<?php
    if (isset($_POST['code']) && isset($_POST['intitule']) && isset($_POST['regime']) && isset($_POST['coefficient']) && isset($_POST['credits']))
     {
        $code = $_POST['code'];
        $intitule = $_POST['intitule'];
        $regime = $_POST['regime'];
        $coefficient = $_POST['coefficient'];
        $credits = $_POST['credits'];

        echo "<p>Voici les données :<br>Le code de la matière est : <strong>$code</strong><br>"
           . "Son intitulé est : <strong>$intitule</strong><br>"
           . "Son Régime est : <strong>$regime</strong><br>"
           . "Son Coefficient est : <strong>$coefficient</strong><br>"
           . "Son Crédits est : <strong>$credits</strong></p>";
    } else {
        echo "<p>Les données du formulaire n'ont pas été soumises.</p>";
    }
    ?>