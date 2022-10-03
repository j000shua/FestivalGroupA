<?php 

require 'controllers/controller.php';

if(!isset($_GET['action']))
    accueil();

switch($_GET['action']){
    case "etablissements" :
        etab();
        break;
    case "attributions" :
        attrib();
        break;
    default :
        //accueil();
        break;
       
}
//accueil();

?>