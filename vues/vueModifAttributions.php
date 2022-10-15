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
                <td class='reserve'> <?= $attribs[$i] ?></td>
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