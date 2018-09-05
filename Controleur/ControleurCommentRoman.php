<?php

require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurCommentRoman {
    
    private $billet;
    private $commentaire;
    
    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }
    
    // Affiche les détails sur un billet
    public function commentRoman($idBillet) {
        $dataBillet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        echo "CCCCCCCCCC";
        $vue = new Vue("CommentRoman");
        echo "BBBBBBBBBB";
        $vue->generer(array('billet' => $dataBillet, 'commentaires' => $commentaires));
    }
}