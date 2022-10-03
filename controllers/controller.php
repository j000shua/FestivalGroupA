<?php 

//require 'models/modelConnexion.php';
require 'models/modelGet.php';


function accueil(){
    require 'vues/vueAccueil.php';
}

function etab(){
    $etabs = getEtabs();
    require 'vues/vueEtablissements.php';
}

?>