<?php
/* Smarty version 3.1.39, created on 2021-03-29 11:22:41
  from 'C:\www\Projet\Smarty\OffreSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60619c61702227_26729295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684ee22fb9f83793fa5ae2b5bca53d63bed4e221' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\OffreSearch.tpl',
      1 => 1617009695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:C:\\www\\Projet\\Smarty\\Footer.tpl' => 1,
  ),
),false)) {
function content_60619c61702227_26729295 (Smarty_Internal_Template $_smarty_tpl) {
?>
                     <input type="radio" name="search" id="offres" value="offres" onClick ="javascript:offre()">
                     <label for="offres">Offres</label><br>
                </div>
            </form>
        </fieldset>
        <fieldset style="visibility: hidden;">
          <br><br><br><br>
        </fieldset>

        <fieldset id="user" style="visibility: hidden;" class="fieldset2">
        <div>
            <form action="recherche.html" method="GET" class="form2">

                <div class="form">
                    <br />
                    <label for="Nom">Nom: </label><br>
                    <input type="text" name="Nom_pilote" id="Nom_pilote" class="input_form" size="30" required>
                 </div>

                 <div class="form">
                    <br />
                    <label for="Prenom">Prénom: </label> <br>
                    <input type="text" name="Prenom_pilote" id="Prenom_pilote" class="input_form" size="30" required>
                 </div>

                 <div class="form">
                     <br />
                   <label for="Centre">Centre: </label><br>
                   <input type="text" name="Centre" id="Centre" class="input_form" size="30" required>
                 </div>

                 <div class="form">
                     <br />
                   <label for="Promotion">Promotion: </label><br>
                   <input type="text" name="Promotion" id="Promotion" class="input_form" size="30" required>
                 </div>
                 <div>
                    <br />
                    <button type="submit">Valider</button>
                  </div>

            </form>
        </div>

    </fieldset>

    <fieldset id="entreprise" style="visibility: hidden;" class="fieldset2">
        
        <form action="recherche.html" method="GET" class="form2">

           <div class="form">
              <br />
              <label for="Nom de l'entreprise">Nom de l'entreprise: </label><br>
              <input type="text" name="Nom_Entreprise" id="Nom_Entreprise" class="input_form" size="30" required>
           </div>

           <div class="form">
              <br />
              <label for="Secteurs d'activité">Secteurs d'activités: </label> <br>
              <input type="text" name="Secteur_Act" id="Secteur_Act" class="input_form" size="30" required>
           </div>

           <div class="form">
               <br />
             <label for="localité">localité: </label><br>
             <input type="text" name="localité" id="localité" class="input_form" size="30" required>
           </div>

           <div class="form">
               <br />
             <label for="Nbr_Stagiaires">Nombre de stagiaires CESI déjà acceptés: </label><br>
             <input type="number" name="Nbr_Stagiaires" id="Nbr_Stagiaires" class="input_form" min="0" size="30" required>
           </div>          
         <div>
           <br />
           <button type="submit">Valider</button>
         </div>
     </form>
 </fieldset>  

 <fieldset id="offre" style="visibility: hidden;" class="fieldset2"> 
        
    <form action="recherche.html" method="GET" class="form2">

       <div class="form">
          <br />
          <label for="Nom de l'Entreprise">Nom de l'Entreprise: </label><br>
          <input type="text" name="Nom_entreprise" id="Nom_entreprise" class="input_form" size="30" required>
       </div>

       <div class="form">
          <br />
          <label for="Comptences">Compétences: </label> <br>
          <input type="text" name="Comptences" id="Competences" class="input_form" size="30" required>
       </div>

       <div class="form">
           <br />
         <label for="Localité">Localité: </label><br>
         <input type="text" name="Localite" id="Localite" class="input_form" size="30" required>
       </div>

       <div class="form">
           <br />
         <label for="Durée du stage">Durée du stage: </label><br>
         <select name="durée du stage">
             <option value="3_mois"> 3 mois </option>
             <option value="6_mois"> 6 mois </option>
             <option value="9_mois"> 9 mois </option>
             <option value="1_an"> 1 an </option>
         </select>
       </div>

       <div class="form">
         <br />
       <label for="Type de promotion">Type de promotion: </label><br>
       <select name="durée du stage">
         <option value="Informatique"> Informatique </option>
         <option value="S3E"> S3E </option>
         <option value="BTP"> BTP </option>
         <option value="Generaliste"> Généraliste </option>
     </select>
     </div>
     <div class="form">
         <br />
       <label for="Nombre de places">Nombre de places offertes aux étudiants: </label><br>
       <input type="number" name="Nbr_places" id="Nbr_places" class="input_form" min="0" size="30" required>
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
<?php $_smarty_tpl->_subTemplateRender('file:C:\www\Projet\Smarty\Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
