<?php
include('affichage.php');
// Définition de la variable $moy
$moy = 0;

// Fonction de calcul de moyenne qui modifie la variable globale $moy
function moyenne1(...$nombres) {
    global $moy;
    $total = 0;
    $count = count($nombres);
    foreach ($nombres as $nombre) 
        $total += $nombre;
    
    $moy = $total / $count;
}


function moyenne2($notes, $coefficients) {
    global $moy;
    $total = 0;
    $sumCoefficients = 0; // Initialisation de la somme des coefficients
     $numNotes=count($notes);

    // Calcul de la somme des coefficients
    for ($i = 0; $i < $numNotes; $i++) 
        $sumCoefficients += $coefficients[$i];

    for ($i = 0; $i < $numNotes ; $i++) 
        $total += $notes[$i] * $coefficients[$i];
    
    $moy= $total / $sumCoefficients;
}


function moyenne3($notes, $coefficients) {
    global $moy;
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

    $moy= $total / $sumCoefficients;
}
?>