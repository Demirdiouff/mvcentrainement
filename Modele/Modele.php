<?php

// ------------- Modèle (accès aux données) ----------------//

abstract class Modele
{
    
    // Objet PDO d'accès à la BDD
    private $bdd;
    
    // Exécute une requête SQL éventuellement paramétrée 
    protected function executerRequete ($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);     // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);
        }
        return $resultat;
    }

    // Effectue la connexion à la BDD
    // Instancie et renvoi l'objet PDO associé
    private function getBdd()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=mvcentrainement;charset=utf8', 'root', 'root', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
        return $bdd;
    }
}