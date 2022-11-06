<?php $titre = 'supprimer '.$etab['nom']; ?>

<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
<h1>
<br><br><center><h5>L'établissement <?= $etab['nom'];?> a été supprimé</h5>
<a href='index.php?action=etablissements'>Retour</a></center>
</h1>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>