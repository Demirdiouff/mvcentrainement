<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {
    
    
    public function __construct() {
        //$this->billet = new Billet();
    }
    
    // Affiche la liste de tous les billets du blog
    public function accueil() {
        //$billets = $this->billet->getBillets();
        $vue = new Vue("Accueil");
        $vue->generer(array());
        //$vue->generer(array('billets' => $billets));
    }
}