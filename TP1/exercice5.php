
        <?php

// Fonction moyenne1
function moyenne1(...$nombres) {
    $total = 0;
    $count = count($nombres);
    foreach ($nombres as $nombre) 
        $total += $nombre;
    
    return $total / $count;
}

// Fonction moyenne2
function moyenne2($notes, $coefficients) {
    $total = 0;
    $sumCoefficients = 0; // Initialisation de la somme des coefficients
     $numNotes=count($notes);

    // Calcul de la somme des coefficients
    for ($i = 0; $i < $numNotes; $i++) 
        $sumCoefficients += $coefficients[$i];

    for ($i = 0; $i < $numNotes ; $i++) 
        $total += $notes[$i] * $coefficients[$i];
    
    return $total / $sumCoefficients;
}
/* 
function moyenne2($notes, $coefficients) {
    $total = 0;
   
    
     $sumCoefficients = array_sum($coefficients);
    // Calcul de la somme pondérée
    for ($i = 0; $i <count($notes); $i++) 
        $total += $notes[$i] * $coefficients[$i];
    

    return $total / $sumCoefficients; // Calcul de la moyenne
}
*/


// Fonction moyenne3
function moyenne3($notes, $coefficients) {
    $total = 0;
    $sumCoefficients = 0;
    $countNotes = count($notes);
    $countCoefficients = count($coefficients);
    $maxCount = max($countNotes, $countCoefficients);
    
    // Calcul de la somme des coefficients en prenant en compte les coefficients par défaut
    for ($i = 0; $i < $maxCount; $i++) {
        $coefficient = isset($coefficients[$i]) ? $coefficients[$i] : 1;
        $sumCoefficients += $coefficient;
    }

    // Calcul de la somme pondérée
    for ($i = 0; $i < $maxCount; $i++) {
        $note = isset($notes[$i]) ? $notes[$i] : 0;
        $coefficient = isset($coefficients[$i]) ? $coefficients[$i] : 1;
        $total += $note * $coefficient;
    }

    return $total / $sumCoefficients;
}


// Fonction afficherText
//ken ma3titouch couleur ye5o black sinon ye5o il couleur ili inti 3titholo
function afficherText($texte, $couleur = 'black') {
    echo "<span style='font-weight: bold; color: $couleur;'>$texte</span>";
}

// Fonction afficherText2
function afficherText2($texte, $couleur = 'black', $taille = 100) {
    echo "<span style='font-weight: bold; color: $couleur; font-size: $taille%;'>$texte</span>";
}

// Fonction afficherText3

function afficherText3($texte, $couleur = 'black') {
    static $size = 100;
    echo "<span style='font-weight: bold; color: $couleur; font-size: $size%;'>$texte</span>";
    $size += 25;
    if ($size > 200) 
        $size = 100;
    
}

// Test des fonctions
echo "Moyenne 1: " . moyenne1(10, 15, 20) . "<br>";
echo "Moyenne 2: " . moyenne2([10, 15, 20], [1, 2, 3]) . "<br>";
echo "Moyenne 3: " . moyenne3([10, 15, 20], [1, 2]) . "<br>";
afficherText("Texte en gras et noir");
echo "<br>";
afficherText2("Texte en gras et bleu", "blue", 150);
echo "<br>";
afficherText3("Texte en gras <br>", "blue");
afficherText3("Texte en gras<br>","red");
afficherText3("Texte en gras<br>");
afficherText3("Texte en gras<br>", "green");
afficherText3("Texte en gras<br>");
afficherText3("Texte en gras <br>", "blue");
afficherText3("Texte en gras<br>","red");
afficherText3("Texte en gras<br>");
afficherText3("Texte en gras<br>", "green");
afficherText3("Texte en gras<br>");


?>
