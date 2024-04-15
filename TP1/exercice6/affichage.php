<?php
include('moyenne.php');

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




?>