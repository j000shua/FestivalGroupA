<?php 

require 'models/modelGet.php';
require 'models/modelUpdate.php';


function accueil(){ //index sans action
    require 'vues/vueAccueil.php';
}

///////// ETABLISSEMENTS ////////////

function etab(){ // action etablissement
    $etabs = getEtabs();
    require 'vues/vueEtablissements.php';
}

function etabDetail($id){  // action details
    $etab = getEtabsDetails($id);
    require 'vues/vueDetailEtablissement.php';
}

function modifEtab($id){ // action modifier Etablissement

    require 'vues/vueModifEtablissement.php';
}

///////// ATTRIBUTIONS //////////////

function attrib(){  // action attributions

    if(count(getEtabsHebergeur()) == 0){
        echo "il n'y a pas d'etablissements hebergeur :/";} //erreur a mettre dans la vue plus tard
    else
        $etabs = getEtabsAyantAttrib();

            $i = 0;
            foreach($etabs as $etab):
                
                $groupes[$i] = getAttribsFromEtab($etab['id']);
                $i++;
                
            endforeach;

        require 'vues/vueAttributions.php';
}

function modifAttrib(){  // 
    $etabs = getEtabsHebergeur();
    $groupes = getGroupes();
    
    $i = 0;
    foreach($groupes as $groupe):

        foreach($etabs as $etab):

            $attribs[$i] = getNbAttrib($etab['id'], $groupe['id']);
            $i++;

        endforeach;

    endforeach;

    require 'vues/vueModifAttributions.php';
}

function nbAttrib($idEtab, $idGroupe){

    $etab = getEtabsDetails($idEtab);
    $groupe = getGroupeDetails($idGroupe);
    $nbAttrib = getNbAttrib($idEtab, $idGroupe);

    //APRES AVOIR CLIQUER SUR VALIDER
    if(isset($_REQUEST['nbChambres']))
    {
        $nbChambres = $_REQUEST['nbChambres'];
        
        if($nbAttrib == $nbChambres){
            //rien ici
        }
        elseif($nbAttrib == 0)
            updateAttrib($idEtab, $idGroupe, $nbChambres, 'C');

        elseif($nbChambres == 0)
            updateAttrib($idEtab, $idGroupe, $nbChambres, 'D');

        else
            updateAttrib($idEtab, $idGroupe, $nbChambres, 'U');
    }
    //

    $nbSelect = getNbChambresRestantes($idEtab);
    if($nbSelect == 0):
        $nbSelect = getNbAttrib($idEtab, $idGroupe)-1;
    endif;
    
    require 'vues/vueNombreAttributions.php';
}
    

?>