<?php

require 'models/modelConnexion.php';

function getEtabs(){                 //tableau associatif de TOUS les etablissements
    $bdd = getBDD();
    $reqEtab = $bdd->query("select id, nom, nombreChambresOffertes from Etablissement order by id");
    $Etabs = $reqEtab->fetchAll(PDO::FETCH_ASSOC);
    return $Etabs;
}

function getEtabsDetails($id){
    $bdd = getBDD();
    $reqEtab = $bdd->query("select * from Etablissement where id = '$id'");
    $Etabs = $reqEtab->fetch(PDO::FETCH_ASSOC);
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

function getNbChambresRestantes($id){                //etablissements qui ont déja des attributions (pas vides)
    $bdd = getBDD();
    $req = $bdd->query("select sum(nombreChambresOffertes - (select sum( nombreChambres ) 
     from attribution where idEtab='$id' )) as nb from etablissement where id='$id';");
    $nb = $req->fetch(PDO::FETCH_ASSOC);
    return $nb['nb'];
}


function getGroupes(){

    $bdd = getBDD();

    $reqGroupes = $bdd->query("select id, nom, nombrePersonnes from Groupe where hebergement='O' order by id");

    $groupes = $reqGroupes->fetchAll(PDO::FETCH_ASSOC);

    return $groupes;
}

function getGroupeDetails($id){
    $bdd = getBDD();
    $reqGroupe = $bdd->query("select * from Groupe where id = '$id'");
    $Groupe = $reqGroupe->fetch(PDO::FETCH_ASSOC);
    return $Groupe;
}

function getNbAttrib($idEtab, $idGroupe){

    $bdd = getBDD();

    $reqNbAttrib = $bdd->query("select nombreChambres from attribution where idEtab = '$idEtab' AND idGroupe = '$idGroupe';");

    $nbAttrib = $reqNbAttrib->fetch(PDO::FETCH_ASSOC);
    //print_r($nbAttrib);

    if (isset($nbAttrib['nombreChambres']))
        return $nbAttrib['nombreChambres'];
    else
        return 0;
}

?>
