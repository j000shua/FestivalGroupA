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

function updateEtab($id){ // permet la modification des données d'un établissement
    $bdd = getBDD();
    
}

?>