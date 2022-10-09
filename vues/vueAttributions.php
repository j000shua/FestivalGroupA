<?php $titre = 'Attributions'; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->

    
    <?php $i=0; ?>
    
    <?php foreach($etabs as $etab): ?>

        <table width='75%' cellspacing='0' cellpadding='0' align='center' class='tabQuadrille'>

        <tr class='enTeteTabQuad'>
            <td colspan='2' align='left'><?=$etab['nom']." - ".$etab['id']?></td>
        </tr>

        <tr class='ligneTabQuad'>
            <td width='65%' align='left'>Nom groupe</td>
            <td width='35%' align='left'>Chambres attribuées</td>
        </tr>

        <?php foreach($groupes[$i] as $groupe): ?>

            <tr class='ligneTabQuad'>
                <td width='65%' align='left'> <?=$groupe['nom']." (".$groupe['nombrePersonnes']." membres)"?></td>
            </tr>

        <?php endforeach ?>


        </table><br>

    <?php $i++; endforeach ?>

    </table><br> 

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>