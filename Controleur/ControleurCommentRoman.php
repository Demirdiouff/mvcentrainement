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
        $vue = new Vue("CommentRoman");
        $vue->generer(array('billet' => $dataBillet, 'commentaires' => $commentaires));
    }
    
    public function commenter($auteur, $contenu, $idBillet) {
        // Enregistrement du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        // Actualisation de la page pour faire afficher le commentaire
        $this->billet($idBillet);
    }
}