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

function updateEtab($id, $nom, $adresseRue, $codePostal, 
                               $ville, $tel, $adresseElectronique, $type, 
                               $civiliteResponsable, $nomResponsable, 
                               $prenomResponsable, $nombreChambresOffertes)
{  

    $bdd = getBDD();
  
   $req="update Etablissement set nom='$nom',adresseRue='$adresseRue',
         codePostal='$codePostal',ville='$ville',tel='$tel',
         adresseElectronique='$adresseElectronique',type='$type',
         civiliteResponsable='$civiliteResponsable',nomResponsable=
         '$nomResponsable',prenomResponsable='$prenomResponsable',
         nombreChambresOffertes='$nombreChambresOffertes' where id='$id'";
   
   $bdd->exec($req);
}

function createEtab($id, $nom, $adresseRue, $codePostal, $ville, $tel, $adresseElectronique, $type, 
$civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes){

    $bdd = getBDD();

    $req = "insert into Etablissement values ('$id', '$nom', '$adresseRue', 
    '$codePostal', '$ville', '$tel', '$adresseElectronique', '$type', 
    '$civiliteResponsable', '$nomResponsable', '$prenomResponsable',
    '$nombreChambresOffertes')";

    $bdd->exec($req);
}

function deleteEtab($id){
    $bdd = getBDD();

    $req="delete from Etablissement where id='$id'";

    $bdd->exec($req);
}

?>