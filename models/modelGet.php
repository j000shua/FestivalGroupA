<?php

require 'models/modelConnexion.php';

function getEtabs(){
    $bdd = getBDD();
    $reqEtab = $bdd->query("select id, nom, nombreChambresOffertes from Etablissement where 
    nombreChambresOffertes!=0 order by id");
    $Etabs = $reqEtab->fetchAll(PDO::FETCH_ASSOC);
    return $Etabs;
}

?>