<?php $titre = 'Modification Etablissement' + $etab['id']; ?>
<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
<table width='85%' cellspacing='0' cellpadding='0' align='center' class='tabNonQuadrille'>
    <p>test</p>
</table>

<table align='center'>
   <tr>
      <td align='center'><a href='index.php?action=etablissements'>Retour</a>
      </td>
   </tr>
</table>

<?php $contenu = ob_get_clean(); ?>
<?php require 'vueHeader.php'; ?>