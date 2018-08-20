<?php
// Accès aux données
require 'Modele.php';

try {
    $billets = getBillets();
    require 'vueAccueil.php';
} 
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMesasge() . '</body></html>';
}

$billets = getBillets();

// Affichage
require 'vueAccueil.php';
require 'template.php';