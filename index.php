<?php
// Accès aux données
require 'Modele.php';

try {
    $billet = getBillet();
    require 'vueAccueil.php';
} 
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMesasge() . '</body></html>';
}

$billet = getBillet();

// Affichage
require 'vueAccueil.php';
require 'template.php';