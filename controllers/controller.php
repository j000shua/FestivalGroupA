<?php 

require 'models/modelGet.php';



function accueil(){
    require 'vues/vueAccueil.php';
}

function etab(){
    $etabs = getEtabs();
    require 'vues/vueEtablissements.php';
}

function attrib(){

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

function etabDetail($id){
    $etab = getEtabsDetails($id);
    require 'vues/vueDetail.php';
}

?>