<?php
// Fonction pour extraire le code
function extractCode($prenom, $nom) {
    return strtoupper(substr($prenom, 0, 2) . substr($nom, 0, 2));
}

// Fonction pour remplir le tableau des personnes
function remplirTab($tprenom, $tnom, $tage, $tville) {
    $tpersonne = array();
    for ($i = 0; $i < count($tprenom); $i++) {
        $code = extractCode($tprenom[$i], $tnom[$i]);
        $tpersonne[] = array(
            "Code" => $code,
            "Prénom" => $tprenom[$i],
            "Nom" => $tnom[$i],
            "Âge" => $tage[$i],
            "Ville" => $tville[$i]
        );
    }
    return $tpersonne;
}
?>
