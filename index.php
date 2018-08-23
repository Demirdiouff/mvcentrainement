<?php

//------------- Contrôleur (gestion des requêtes entrantes) ----------------//


// Accès aux données
require 'Modele.php';

try {
    $billets = getBillets();
    require 'vueAccueil.php';
} 
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
