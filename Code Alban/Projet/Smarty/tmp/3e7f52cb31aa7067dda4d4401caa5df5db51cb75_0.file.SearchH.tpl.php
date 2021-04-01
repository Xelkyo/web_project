<?php
/* Smarty version 3.1.39, created on 2021-03-30 11:39:41
  from 'C:\www\Projet\Smarty\SearchH.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062f1dddb39a9_91402735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e7f52cb31aa7067dda4d4401caa5df5db51cb75' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\SearchH.tpl',
      1 => 1617096211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062f1dddb39a9_91402735 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="search.css">
   <head> 
      <meta charset="utf-8"> 
      <title>Créer une Offre</title> 
   </head> 
   <body>
        <fieldset class="select" >
            <form>
                <br>
                <p>
                    Que voulez-vous rechercher ?
                </p>
                <div>
                     <input type="radio" name="search" id="entreprises" value="entreprises" onClick ="javascript:entreprise()">
                     <label for="entreprises">Entreprises</label><br>
                     <?php if ($_smarty_tpl->tpl_vars['Droits']->value == '1') {?>
                     <input type="radio" name="search" id="utilisateurs" value="utilisateurs" onClick ="javascript:user()">
                     <label for="utilisateurs">Utilisateurs</label><br>
                     <?php }?>
                     <input type="radio" name="search" id="offres" value="offres" onClick ="javascript:offre()">
                     <label for="offres">Offres</label><br>
                </div>
            </form>
        </fieldset>

          <fieldset id="user" style="visibility: hidden;" class="fieldset2">
          <div>

            <form action="searchuser.php" method="POST" class="form2">

                  <div class="form">
                      <br />
                      <label for="Nom">Nom: </label><br>
                      <input type="text" name="Nom_pilote" id="Nom_pilote" class="input_form" size="30" >
                  </div>

                  <div class="form">
                      <br />
                      <label for="Prenom">Prénom: </label> <br>
                      <input type="text" name="Prenom_pilote" id="Prenom_pilote" class="input_form" size="30" >
                  </div>

                  <div class="form">
                      <br />
                    <label for="Centre">Centre: </label><br>
                    <input type="text" name="Centre" id="Centre" class="input_form" size="30" >
                  </div>

                  <div class="form">
                      <br />
                    <label for="Promotion">Promotion: </label><br>
                    <input type="text" name="Promotion" id="Promotion" class="input_form" size="30">
                  </div>
                  <div>
                      <br />
                      <button type="submit">Valider</button>
                    </div>
                    
              </form>
          </div>

      </fieldset>


    <fieldset id="entreprise" style="visibility: hidden;" class="fieldset2">
        
        <form action="searchentreprise.php" method="POST" class="form2">

           <div class="form">
              <br />
              <label for="Nom de l'entreprise">Nom de l'entreprise: </label><br>
              <input type="text" name="Nom_Entreprise" id="Nom_Entreprise" class="input_form" size="30" >
           </div>

           <div class="form">
              <br />
              <label for="Secteurs d'activité">Secteurs d'activités: </label> <br>
              <input type="text" name="Secteur_Act" id="Secteur_Act" class="input_form" size="30" >
           </div>

           <div class="form">
               <br />
             <label for="localité">localité: </label><br>
             <input type="text" name="localité" id="localité" class="input_form" size="30" >
           </div>

           <div class="form">
               <br />
             <label for="Nbr_Stagiaires">Nombre de stagiaires CESI déjà acceptés: </label><br>
             <input type="number" name="Nbr_Stagiaires" id="Nbr_Stagiaires" class="input_form" min="0" size="30" >
           </div>          
         <div>
           <br />
           <button type="submit">Valider</button>
         </div>
     </form>
 </fieldset>  

 <fieldset id="offre" style="visibility: hidden;" class="fieldset2"> 
        
    <form action="searchoffre.php" method="POST" class="form2">

       <div class="form">
          <br />
          <label for="Nom de l'Entreprise">Nom de l'Entreprise: </label><br>
          <input type="text" name="Nom_entreprise" id="Nom_entreprise" class="input_form" size="30" >
       </div>

       <div class="form">
          <br />
          <label for="Comptences">Compétences: </label> <br>
          <input type="text" name="Comptences" id="Competences" class="input_form" size="30" >
       </div>

       <div class="form">
           <br />
         <label for="Localité">Localité: </label><br>
         <input type="text" name="Localite" id="Localite" class="input_form" size="30" >
       </div>

       <div class="form">
           <br />
         <label for="durée_du_stage">Durée du stage: </label><br>
         <select name="durée_du_stage">
             <option value="3_mois"> 3 mois </option>
             <option value="6_mois"> 6 mois </option>
             <option value="9_mois"> 9 mois </option>
             <option value="1_an"> 1 an </option>
         </select>
       </div>

       <div class="form">
         <br />
       <label for="Type_de_promotion">Type de promotion: </label><br>
       <select name="Type_de_promotion">
         <option value="Informatique"> Informatique </option>
         <option value="S3E"> S3E </option>
         <option value="BTP"> BTP </option>
         <option value="Generaliste"> Généraliste </option>
     </select>
     </div>
     <div class="form">
         <br />
       <label for="Nombre de places">Nombre de places offertes aux étudiants: </label><br>
       <input type="number" name="Nbr_places" id="Nbr_places" class="input_form" min="0" size="30" >
     </div>
      
     <div>
       <br />
       <button type="submit">Valider</button>
     </div>
 </form>
</fieldset>
        
<?php echo '<script'; ?>
>
    function entreprise()
    {
        document.getElementById('user').style.visibility='hidden';
        document.getElementById('offre').style.visibility='hidden';
        document.getElementById('entreprise').style.visibility='visible';
    }

    function user()
    {
        document.getElementById('offre').style.visibility='hidden';
        document.getElementById('entreprise').style.visibility='hidden';
        document.getElementById('user').style.visibility='visible';
    }

    function offre()
    {
        document.getElementById('entreprise').style.visibility='hidden';
        document.getElementById('user').style.visibility='hidden';
        document.getElementById('offre').style.visibility='visible';
    }


<?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"><?php echo '</script'; ?>
>
   </body> 


<?php }
}
