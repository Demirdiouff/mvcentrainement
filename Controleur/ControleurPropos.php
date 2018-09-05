<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurPropos {
    
    
    public function __construct() {
        //$this->billet = new Billet();
    }
    
    // Affiche la liste de tous les billets du blog
    public function apropos() {
        //$billets = $this->billet->getBillets();
        $vue = new Vue("Propos");
        $vue->generer(array());
        //$vue->generer(array('billets' => $billets));
    }
}