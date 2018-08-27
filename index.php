<?php

//------------- Routeur (Contrôleur frontal) (point d'arrivée du site) ----------------//


require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();