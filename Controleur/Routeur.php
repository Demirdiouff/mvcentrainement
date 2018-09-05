<?php


//------------- Contrôleur (point d'entrée unique au site, va centraliser la gestion des requêtes entrantes et afficher les vues en question selon la demande) ----------------//


require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurPropos.php';
require_once 'Vue/Vue.php';


class Routeur {
    
    private $ctrlAccueil;
    private $ctrlPropos;
    //private $ctrlBillet;
    
    public function __construct() {
        //$this->ctrlBillet = new ControleurBillet();
    }
    
    // Traite une requête entrante 
    public function routerRequete() {
         try {
             $action = 'accueil';
             if (isset($_GET['action'])) {
                 $action = $_GET['action'];
             }
             switch ($action) {
                 case 'accueil':
                     $this->ctrlAccueil = new ControleurAccueil();
                     $this->ctrlAccueil->accueil();
                    break;
                 case 'apropos':
                     $this->ctrlPropos = new ControleurPropos();
                     $this->ctrlPropos->apropos();
                    // faire quelque chose
                    break;
                 default:
                     throw new Exception("Action non valide");
             }
//             if (isset($_GET['action'])) {
//                 if($_GET['action'] == 'billet') {
//                     if (isset($_GET['id'])) {
//                         $idBillet = intval($_GET['id']);
//                         if ($idBillet != 0) {
//                             $this->ctrlBillet->billet($idBillet);
//                         }
//                         else
//                             throw new Exception("Identifiant de billet non valide");
//                     }
//                     else throw new Exception("Identifiant de billet non défini");
//                 }
//                 else throw new Exception("Action non valide");
                
//             }
//             else { // Aucune action définie : affichage de l'accueil
//                 $this->ctrlAccueil->accueil();
//             }
        }
        catch (Exception $e) {
           $this->erreur($e->getMessage());
        }
    }
    
    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur => $msgErreur'));
    }
}