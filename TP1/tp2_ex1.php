<?php
// Inclusion des fichiers
require 'declarations.php';
require 'lesFonctions.php';

// Remplissage du tableau des personnes
$tpersonne = remplirTab($tprenom, $tnom, $tage, $tville);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau avec PHP</title>
</head>
<body>
    <table border="1" cellspacing="4">
        <tr>
            <?php foreach ($tpersonne[0] as $val => $value): ?>
                <th><?= $val ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($tpersonne as $personne): ?>
            <tr>
                <?php foreach ($personne as $value): ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
