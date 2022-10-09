<?php $titre = 'Etablissements'; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
                                             
   <table width='70%' cellspacing='0' cellpadding='0' align='center' class='tabNonQuadrille'>

      <tr class='enTeteTabNonQuad'>
         <td colspan='4'>Etablissements</td>
      </tr>

      <?php foreach ($etabs as $etab): ?>
         
         <tr class='ligneTabNonQuad'>
            <td> <?= $etab['nom']?> </td>
         </tr>

      <?php endforeach ?>

   </table>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>