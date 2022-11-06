<?php $titre = 'Etablissements'; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
                                             
   <table width='70%' cellspacing='0' cellpadding='0' align='center' class='tabNonQuadrille'>

      <tr class='enTeteTabNonQuad'>
         <td colspan='4'>Etablissements</td>
      </tr>

      <?php foreach ($etabs as $etab): ?>
         
         <tr class='ligneTabNonQuad'>
            <td> <?= $etab['nom']."-".$etab['id']?> </td>

            <td width='16%' align='center'> 
            <a href='index.php?action=details&id=<?= $etab['id'];?>'>Voir détail</a>
            </td>

            <td width='16%' align='center'> 
            <a href='index.php?action=modifier&id=<?= $etab['id'];?>'>Modifier</a></td>
         </tr>
      <?php endforeach ?>

   </table>
   
   <a align='center' href='index.php?action=creer'>Créer</a>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>