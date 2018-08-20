<?php

// Renvoi la liste de tous les billets, triés par identifiant décroissant

function getBillets() {
    $bdd = new PDO('mysql:host=localhost;dbname=mvcentrainement;charset=utf8', 'root', 'root');
    $billets = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET' . ' order by BIL_ID desc');
    return $billets;
}

// Effectue la connexion à la BDD
// Instancie et renvoi l'objet PDO associé

function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=mvcentrainement;charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}