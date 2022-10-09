<?php

require 'models/modelConnexion.php';

function getEtabs(){                 //tableau associatif de TOUS les etablissements
    $bdd = getBDD();
    $reqEtab = $bdd->query("select id, nom, nombreChambresOffertes from Etablissement order by id");
    $Etabs = $reqEtab->fetchAll(PDO::FETCH_ASSOC);
    return $Etabs;
}

function getEtabsHebergeur(){        //etablissements qui peuvent heberger des equipes (peuvent etre complets/vides)
    $bdd = getBDD();
    $reqEtab = $bdd->query("select id, nom, nombreChambresOffertes from Etablissement where 
    nombreChambresOffertes !=0 order by id");
    $Etabs = $reqEtab->fetchAll(PDO::FETCH_ASSOC);
    return $Etabs;
}

function getEtabsAyantAttrib(){                //etablissements qui ont déja des attributions (pas vides)
    $bdd = getBDD();
    $reqEtab = $bdd->query("select distinct id, nom, nombreChambresOffertes from Etablissement, 
    Attribution where id = idEtab order by id");
    $Etabs = $reqEtab->fetchAll(PDO::FETCH_ASSOC);
    return $Etabs;
}

function getAttribsFromEtab($id){

    $bdd = getBDD();

    $reqAttrib = $bdd->query("select distinct id, nom, nombrePersonnes, nombreChambres from Groupe, Attribution where 
    Attribution.idGroupe=Groupe.id and idEtab='$id'");

    $Attribs = $reqAttrib->fetchAll(PDO::FETCH_ASSOC);

    return $Attribs;
}

?>