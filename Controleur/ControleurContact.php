<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurContact {
    
    
    public function __construct() {

    }
    
    // Affiche la page Contact
    public function contact() {
        $vue = new Vue("Contact");
        $vue->generer(array());
    }
}