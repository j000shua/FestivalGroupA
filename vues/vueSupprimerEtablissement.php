<?php $titre = 'supprimer '.$etab['nom']?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
<h1>
<br><center><h5>Souhaitez-vous vraiment supprimer l'établissement <?= $etab['nom'];?> ? 
   <br><br>
   <a href='index.php?action=suppEtab&id=<?= $etab['id'];?>&valide=oui'>
   Oui</a>&nbsp; &nbsp; &nbsp; &nbsp;
   <a href='index.php?action=etablissements'>Non</a></h5></center>
</h1>
<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>