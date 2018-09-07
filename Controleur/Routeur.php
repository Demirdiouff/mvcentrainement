<?php

// ------------- Contrôleur (point d'entrée unique au site, va centraliser la gestion des requêtes entrantes et afficher les vues en question selon la demande) ----------------//
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurPropos.php';
require_once 'Controleur/ControleurRoman.php';
require_once 'Controleur/ControleurCommentRoman.php';
require_once 'Controleur/ControleurContact.php';
require_once 'Vue/Vue.php';

class Routeur
{

    private $ctrlAccueil;

    private $ctrlPropos;

    private $ctrlRoman;

    private $ctrlCommentRoman;
    
    private $ctrlAjoutCommentRoman;

    private $ctrlContact;

    public function __construct()
    {
        
    }

    // Traite une requête entrante
    public function routerRequete()
    {
        try {
            $action = 'accueil';
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                
                $idBillet = 'billet';
                if (isset($_GET['action'])) {
                    $idBillet = $_GET['id'];
                }
                
                // je pense qu'il faut rajouter une partie par ici avec $auteur, $contenu ... comme ligne 39 mais,
                // je ne sais pas comment l'écrire pour quelque chose qui va "s'envoyer" 
                // et a mon avis c'est peut être pas $action qu'il faut mettre, mais je ne visualise pas comment faire autrement ... 
                // (PS: je suis à peu près à 45min sur ce problème avec différents tests ^^)
                $action = 'commenter';
                if (isset($_GET['action'])) {
                    $auteur = $_POST['auteur'];
                    $contenu = $_POST['contenu'];
                    $idBillet = $_POST['id'];
                }
                
            }
            switch ($action) {
                case 'accueil':
                    $this->ctrlAccueil = new ControleurAccueil();
                    $this->ctrlAccueil->accueil();
                    break;
                case 'apropos':
                    $this->ctrlPropos = new ControleurPropos();
                    $this->ctrlPropos->apropos();
                    break;
                case 'roman':
                    $this->ctrlRoman = new ControleurRoman();
                    $this->ctrlRoman->roman();
                    break;
                case 'commentRoman':
                    $this->ctrlCommentRoman = new ControleurCommentRoman();
                    $this->ctrlCommentRoman->commentRoman($idBillet);
                case 'commenter':
                    $this->ctrlAjoutCommentRoman = new ControleurCommentRoman();
                    $auteur = $this->ctrlAjoutCommentRoman($_POST, 'auteur');
                    $contenu = $this->ctrlAjoutCommentRoman($_POST, 'contenu');
                    $idBillet = $this->ctrlAjoutCommentRoman($_POST, 'idBillet');
                    $this->ctrlAjoutCommentRoman->commenter($auteur, $contenu, $idBillet);
                case 'contact':
                    $this->ctrlContact = new ControleurContact();
                    $this->ctrlContact->contact();
                    break;
                // faire quelque chose
                default:
                    throw new Exception("Action non valide");
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array(
            'msgErreur' => $msgErreur
        ));
    }
}