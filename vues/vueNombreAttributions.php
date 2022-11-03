<?php $titre = ''; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->

<form method='POST' action='?action=nbAttributions&idEtab=<?=$idEtab?>&idGroupe=<?=$idGroupe?>'>

    <input type='hidden' value='validerModifAttrib' name='action'>
    <input type='hidden' value='$idEtab' name='idEtab'>
    <input type='hidden' value='$idGroupe' name='idGroupe'>
   
   
   <br>
    <center>
        <h5>
            Combien de chambres souhaitez-vous pour le groupe <?=$groupe['nom']?> dans l'établissement <?=$etab['nom']?>?

            <select name='nbChambres'>
                <?php for ($i=0; $i<= $nbSelect ; $i++): ?>

                    <option ><?=$i?></option>

                <?php endfor; ?>
            </select>
        </h5>
        
        <input type='submit' value='Valider' name='valider'>
        <input type='reset' value='Annuler' name='Annuler'><br><br>

        <a href='index.php?action=modifAttributions'>Retour</a>

    </center>

</form>


<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>

<?php// if($i == $nbAttrib) echo'selected="selected"' A METTRE DANS OPTION POUR VALEUR PAR DEFAUT ATTENTION CA FONCTIONNE PAS?>