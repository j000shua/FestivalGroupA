<?php $titre = $etab['nom']; ?>

<?php ob_start(); ?>
<table width='60%' cellspacing='0' cellpadding='0' align='center' class='tabNonQuadrille'>
    <tr class='enTeteTabNonQuad'>
      <td colspan='3'>Nom : <?= $etab['nom']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td  width='20%'>Id : </td>
        <td><?= $etab['id']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Adresse : </td>
        <td><?= $etab['adresseRue']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Code postal : </td>
        <td><?= $etab['codePostal']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Ville : </td>
        <td><?= $etab['ville']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Téléphone : </td>
        <td><?= $etab['tel']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>E-mail : </td>
        <td><?= $etab['adresseElectronique']?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Type : </td>
        <td><?php if($etab['type'] == 1)
        {
            print("Etablissement scolaire");
        }
        else
        {
            print("Autre établissement");
        }
        ?></td>
    </tr>

    <tr class='ligneTabNonQuad'>
        <td width='20%'>Responsable : </td>
        <td><?= $etab['civiliteResponsable']." ".$etab['nomResponsable']." ".$etab['prenomResponsable']?></td>
   </tr>

   <tr class='ligneTabNonQuad'>
        <td width='20%'>Offre : </td>
        <td><?php if($etab['nombreChambresOffertes'] > 0)
        {
            print($etab['nombreChambresOffertes']." "."chambres");
        }
        else
        {
            print($etab['nombreChambresOffertes']." "."chambre");
        }?></td>
   </tr>

</table>

<table align='center'>
   <tr>
      <td align='center'><a href='index.php?action=etablissements'>Retour</a>
      </td>
   </tr>
</table>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vueHeader.php'; ?>