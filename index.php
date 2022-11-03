<?php 

require 'controllers/controller.php';


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

        case "creationEtab": //////
            creerEtab();
            break;

        case "suppEtab": //////
            suppEtab();
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