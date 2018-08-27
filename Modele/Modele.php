<?php

// ------------- Modèle (accès aux données) ----------------//

class Modele
{

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

    // Renvoi la liste des commentaires associés à un billet
    public function getCommentaires($idBillet)
    {
        $bdd = getBdd();
        $commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date,' . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE' . ' where BIL_ID=?');
        $commentaires->execute(array(
            $idBillet
        ));
        return $commentaires;
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