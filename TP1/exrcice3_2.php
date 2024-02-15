
<!DOCTYPE html>
<html>
<head>
    <title>exercice 2</title>
  
</head>
<body>
    
<?php
$tpersonne = array(
    "prenom" => array("prenom1" => "ali", "prenom2" => "salma", "prenom3" => "mohamed", "prenom4" => "iness"),
    "nom" => array("nom1" => "benAli", "nom2" => "benSalma", "nom3" => "benMohamed", "nom4" => "benIness"),
    "age" => array("age1" => 20, "age2" => 23, "age3" => 19, "age4" => 22),
    "ville" => array("ville1" => "sfax", "ville2" => "sousse", "ville3" => "gabes", "ville4" => "sfax")
);
?>

<table border="1" cellspacing="4">
    <tr>
    <tr>
        <th>Code</th>
        <th>prenom</th>
        <th>nom</th>
        <th>age</th>
        <th>ville</th>
    </tr>
    </tr>
    <?php
    // Boucle pour parcourir toutes les entrées
    for ($i = 1; $i <= sizeof($tpersonne['prenom']); $i++) {
        echo "<tr>";
        echo "<td>" . substr($tpersonne['prenom']['prenom'.$i],0,2).substr($tpersonne['nom']['nom'.$i] ,0,2). "</td>";
        // Affichage des prénoms
        echo "<td>" . $tpersonne['prenom']['prenom'.$i] . "</td>";
        // Affichage des noms
        echo "<td>" . $tpersonne['nom']['nom'.$i] . "</td>";
        // Affichage des âges
        echo "<td>" . $tpersonne['age']['age'.$i] . "</td>";
        // Affichage des villes
        echo "<td>" . $tpersonne['ville']['ville'.$i] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
