<?php $titre = 'Gerer les attributions'; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
<?php $i=0; ?>

<table width='80%' cellspacing='0' cellpadding='0' align='center' class='tabQuadrille'>

    <tr class='ligneTabQuad'>
        <td>.</td>
        <?php foreach($etabs as $etab): ?>

            <td width='25%'><?= $etab['nom']." - ".$etab['id'];?></td>

        <?php endforeach ?>
    </tr>

    <?php foreach($groupes as $groupe): ?>

        <tr class='ligneTabQuad'>

            <td width='25%'><?= $groupe['nom']." - ".$groupe['id'];?></td>

            <?php foreach($etabs as $etab): ?>
                <td class='reserve'> 

                    <?php if($attribs[$i] == 0 && getNbChambresRestantes($etab['id']) == 0): //ATTENTION ICI ON APPELE UNE FONCTION DU MODELE CA NE RESPECTE PAS LES PRINCIPES DU MVC, PENSER A TROUVER UN TRUC MIEUX?> 
                    - <?php else: ?>     
                    
                    <a href='index.php?action=nbAttributions&idEtab=<?=$etab['id']?>&idGroupe=<?=$groupe['id']?>'> 
                        <?= $attribs[$i] ?> 
                    </a>
                    <?php endif; ?>
                </td>
                <?php $i++; ?>
            <?php endforeach ?>

        </tr>

    <?php endforeach ?>
        
</table>


<table align='center'>
   <tr>
      <td align='center'><a href='index.php?action=attributions'>Retour</a>
      </td>
   </tr>
</table>


<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>