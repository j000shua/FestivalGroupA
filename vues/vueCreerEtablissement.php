<?php $titre = 'Création Établissement'; ?>
<?php ob_start(); ?>

<!-- CONTENU DE LA VUE AVEC LES VARIABLES PHP -->
<table width='85%' align='center' cellspacing='0' cellpadding='0' class='tabNonQuadrille'>
    <tr class='enTeteTabNonQuad'>
         <td colspan='3'>Nouvel établissement</td>
    </tr>

    <tr class='ligneTabNonQuad'>
         <td> Id*: </td>
         <td><input type='text' value='$id' name='id' size ='10' maxlength='8'></td>
    </tr>;
</table>

<form method='POST' action='?action=etablissements'>
   <input type='hidden' value='validerCreEtab' name='action'>
   <table width='85%' cellspacing='0' cellpadding='0' align='center' 
   class='tabNonQuadrille'>
   
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'>lezgooo</td>
      </tr>
     <!--  <tr>
         <td><input type='hidden' name='id'></td>
      </tr> -->
      
      <tr class="ligneTabNonQuad">
         <td> Id*: </td>
         <td><input type="text" name="id" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Nom*: </td>
         <td><input type="text" name="nom" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Adresse*: </td>
         <td><input type="text" name="adresseRue" 
         size="50" maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Code postal*: </td>
         <td><input type="text" name="codePostal" 
         size="4" maxlength="5"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Ville*: </td>
         <td><input type="text" name="ville" size="40" 
         maxlength="35"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Téléphone*: </td>
         <td><input type="text" name="tel" size ="20" 
         maxlength="10"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> E-mail: </td>
         <td><input type="text" name=
         "adresseElectronique" size ="75" maxlength="70"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Type*: </td>  
         <td>
            <input type='radio' name='type' value='1' checked> Etablissement Scolaire
            <input type='radio' name='type' value='0'> Autre
         </td>    
         </tr>
         <tr class='ligneTabNonQuad'>
            <td colspan='2' ><strong>Responsable:</strong></td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td> Civilité*: </td>
            <td> <select name='civiliteResponsable'>

               <?php for ($i=0; $i<3; $i=$i+1)                       
                  echo "<option>$tabCivilite[$i]</option>";
               ?>   
               
               </select>&nbsp; &nbsp; &nbsp; Nom*: 
               <input type="text" name="nomResponsable" size="26" maxlength="25">
               &nbsp; &nbsp; &nbsp; Prénom: 
               <input type="text"  name="prenomResponsable" size="26" maxlength="25">
            </td>
         </tr>
         <tr class="ligneTabNonQuad">
            <td> Nombre chambres offertes*: </td>
            <td><input type="text" name="nombreChambresOffertes" size ="2" maxlength="3"></td>
         </tr>
   </table>
   
   
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td align='right'><input type='submit' type='reset' value='Valider' name='valider'>
         </td>
         <td align='left'><input type='reset' value='Annuler' name='annuler'>
         </td>
      </tr>
      <tr>
         <td colspan='2' align='center'><a href='index.php?action=etablissements'>Retour</a>
         </td>
      </tr>
   </table>
  
</form>

<form method='POST' action='?action=etablissements'>
   <input type='hidden' value='validerCreEtab' name='action'>
   <table width='85%' cellspacing='0' cellpadding='0' align='center' 
   class='tabNonQuadrille'>
   
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'>Nouvel Établissement</td>
      </tr>
     <!--  <tr>
         <td><input type='hidden' name='id'></td>
      </tr> -->
      
      <tr class="ligneTabNonQuad">
         <td> Id*: </td>
         <td><input type="text" name="id" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Nom*: </td>
         <td><input type="text" name="nom" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Adresse*: </td>
         <td><input type="text" name="adresseRue" 
         size="50" maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Code postal*: </td>
         <td><input type="text" name="codePostal" 
         size="4" maxlength="5"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Ville*: </td>
         <td><input type="text" name="ville" size="40" 
         maxlength="35"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Téléphone*: </td>
         <td><input type="text" name="tel" size ="20" 
         maxlength="10"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> E-mail: </td>
         <td><input type="text" name=
         "adresseElectronique" size ="75" maxlength="70"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Type*: </td>  
         <td>
            <input type='radio' name='type' value='1' checked> Etablissement Scolaire
            <input type='radio' name='type' value='0'> Autre
         </td>    
         </tr>
         <tr class='ligneTabNonQuad'>
            <td colspan='2' ><strong>Responsable:</strong></td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td> Civilité*: </td>
            <td> <select name='civiliteResponsable'>

               <?php for ($i=0; $i<3; $i=$i+1)                       
                  echo "<option>$tabCivilite[$i]</option>";
               ?>   
               
               </select>&nbsp; &nbsp; &nbsp; Nom*: 
               <input type="text" name="nomResponsable" size="26" maxlength="25">
               &nbsp; &nbsp; &nbsp; Prénom: 
               <input type="text"  name="prenomResponsable" size="26" maxlength="25">
            </td>
         </tr>
         <tr class="ligneTabNonQuad">
            <td> Nombre chambres offertes*: </td>
            <td><input type="text" name="nombreChambresOffertes" size ="2" maxlength="3"></td>
         </tr>
   </table>
   
   
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td align='right'><input type='submit' type='reset' value='Valider' name='valider'>
         </td>
         <td align='left'><input type='reset' value='Annuler' name='annuler'>
         </td>
      </tr>
      <tr>
         <td colspan='2' align='center'><a href='index.php?action=etablissements'>Retour</a>
         </td>
      </tr>
   </table>
  
</form>

<?php $contenu = ob_get_clean(); ?>
<?php require 'vueHeader.php'; ?>