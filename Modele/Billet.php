<?php

require_once 'Modele/Modele.php';

class Billet extends Modele {
    
    // Renvoi la liste des billets du blog 
    
    public function getBillets()
    {
        $bdd = getBdd();
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET' . ' order by BIL_ID desc');
        return $billets;
    }
    
    // Renvoi les informations sur un billet
    public function getBillet($idBillet)
    {
        $bdd = getBdd();
        $billet = $bdd->prepare('SELECT BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET' . ' where BIL_ID=?');
        $billet->execute(array(
            $idBillet
        ));
        if ($billet->rowCount() > 0)
            return $billet->fetch(); // Accès à la première ligne de résultat
            else
                throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}