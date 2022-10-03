<?php $titre = 'Etablissements'; ?>

<?php ob_start(); ?>


<?php
echo "                                                
<table width='70%' cellspacing='0' cellpadding='0' align='center' class='tabNonQuadrille'>
   <tr class='enTeteTabNonQuad'>
      <td colspan='4'>Etablissements</td>
   </tr>"
;

foreach ($etabs as $row){                            //afficher le tout
    $id = $row['id']; 
    
    echo "
         <tr class='ligneTabNonQuad'>
          <td width='52%'>".$row['nom']."</td>
          
          <td width='16%' align='center'> 
          <a href='detailEtablissement.php?id=$id'>
          Voir détail</a></td>
 
          <td width='16%' align='center'> 
          <a href='modificationEtablissement.php?action=demanderModifEtab&amp;id=$id'>
          Modifier</a></td>"
    ;
 }
?>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>