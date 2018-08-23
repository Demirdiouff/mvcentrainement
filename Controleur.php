<?php


//------------- Contrôleur frontal (point d'entrée unique au site, va centraliser la gestion des requêtes entrantes) ----------------//


require 'Modele.php';

// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'vueErreur.php';
}