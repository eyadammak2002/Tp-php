<html>
<body>
<?php

$tprenom=array("ali","salma","mohamed","iness");
$tnom=array("benAli","benSalma","benMohamed","benIness");
$tage=array(20,23,19,22);
$tville=array("sfax","sousse","gabes","sfax");

?>

<p style="border: 1px solid black; padding: 10px; width: 300px; margin: 0 auto;">
      LES TABLEAUX
    


<table border="1">
    <tr>
         <th>Code</th>
        <th>prenom</th>
        <th>nom</th>
        <th>age</th>
        <th>ville</th>
    </tr>
    <?php
    // Boucle pour parcourir toutes les entrées
    for ($i = 0; $i < sizeof($tprenom); $i++) {
        echo "<tr>";
        // Affichage des prénoms
        echo "<td>" . $tprenom[$i] . "</td>";
        // Affichage des noms
        echo "<td>" . $tnom[$i] . "</td>";
        // Affichage des âges
        echo "<td>" . $tage[$i] . "</td>";
        // Affichage des villes
        echo "<td>" . $tville[$i] . "</td>";
        echo "</tr>";
    }
    ?>
</table>  
</p> 
</body>
</html>

