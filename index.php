<?php
// Accès aux données
$bdd = new PDO('mysql:host=localhost;dbname=mvcentrainement;charset=utf8', 'root', 'root');
$billets = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date,' . 'BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET' . ' order by BIL_ID desc');

// Affichage
require 'vueAccueil.php';