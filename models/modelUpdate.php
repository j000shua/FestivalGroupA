<?php

function updateAttrib($idEtab, $idGroupe, $nbChambres, $mode){
    $bdd = getBDD();

    switch($mode){       
        case 'C':
            $req = $bdd->exec("insert into attribution values ('$idEtab', '$idGroupe', $nbChambres);");
            break;        
        case 'D': 
            $req = $bdd->exec("delete from attribution where idEtab='$idEtab' and idGroupe='$idGroupe'");
            break;        
        case 'U': 
            $req = $bdd->exec("update Attribution set nombreChambres=$nbChambres where idEtab=
            '$idEtab' and idGroupe='$idGroupe'");
            break;
    }
}

function updateEtab($id, $nom, $adresseRue, $codePostal, $ville,
                    $tel, $adresseElectronique, $type, $civiliteResponsable,
                    $nomResponsable, $prenomResponsable, $nombreChambresOffertes){ // permet la modification des données d'un établissement
    $bdd = getBDD();

    $nom=str_replace("'", "''", $nom);
    $adresseRue=str_replace("'","''", $adresseRue);
    $ville=str_replace("'","''", $ville);
    $adresseElectronique=str_replace("'","''", $adresseElectronique);
    $nomResponsable=str_replace("'","''", $nomResponsable);
    $prenomResponsable=str_replace("'","''", $prenomResponsable);

    $req = $bdd->exec("update Etablissement set nom='$nom', adresseRue='$adresseRue', codePostal='$codePostal',
                       ville='$ville', tel='$tel', adresseElectronique='$adresseElectronique', type='$type',
                       civiliteResponsable='$civiliteResponsable', nomResponsable='$nomResponsable',
                       prenomResponsable='$prenomResponsable', nombreChambresOffertes='$nombreChambresOffertes' 
                       where id='$id'");    
}

?>