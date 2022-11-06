<?php 

require 'controllers/controller.php';


/* 

/!\ ATTENTION, il n'y pas encore la gestion des erreurs de saisies sur les creations et modifications d'etablissements
/!\ ATTENTION, actuellement un etablissement peut etre supprimer juste en entrant l'url 'index.php?action=suppEtab&id=[id de l'etab]&valide=oui'
 + les etablissements qui ont des attributions peuvent actuellement etre supprimer !

*/

if(!isset($_GET['action']))
    accueil();
else
    switch($_GET['action']){

        case "etablissements" :
            etab();
            break;

        case "details":
            etabDetail($_GET['id']);
            break;

        case "modifEtab":
            modifEtab($_GET['id']);
            break;

        case "creationEtab":
            creerEtab();
            break;

        case "suppEtab": //////
            suppEtab($_GET['id']);
            break;

        case "attributions" :
            attrib();
            break;

        case "modifAttributions":
            modifAttrib();
            break;

        case "nbAttributions":
            nbAttrib($_GET['idEtab'],$_GET['idGroupe']);
            break;

        default:
            echo "erreur dans l'action demandée"; //FAIRE UNE VUE ET CONTROLLER ERREUR PLUS TARD
            break;
        
}

?>