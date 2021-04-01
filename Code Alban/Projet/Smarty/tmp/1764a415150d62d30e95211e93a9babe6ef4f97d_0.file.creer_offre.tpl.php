<?php
/* Smarty version 3.1.39, created on 2021-04-01 02:58:08
  from 'C:\www\Projet\Smarty\creer_offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60651aa0a7ddf1_35636661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1764a415150d62d30e95211e93a9babe6ef4f97d' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\creer_offre.tpl',
      1 => 1617238674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60651aa0a7ddf1_35636661 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="creer.css">
        <fieldset>

            <!-- Création d'un formulaire pour transmetre les champs au PHP-->

               <form action="creer_offre.php" method="POST" class="form">

                  <div class="form">
                     <br />
                     <label for="Nom de l'Entreprise">Nom de l'Entreprise: </label><br>
                     <input type="text" name="Nom_entreprise" id="Nom_entreprise" size="30" required>
                  </div>

                  <div class="form">
                     <br />
                     <label for="Comptences">Compétences: </label> <br>
                     <input type="text" name="Comptences" id="Competences" size="30" required>
                  </div>

                  <div class="form">
                      <br />
                    <label for="Localité">Localité: </label><br>
                    <input type="text" name="Localite" id="Localite" size="30" required>
                  </div>

                  <div class="form">
                      <br />
                    <label for="Durée du stage">Durée du stage: </label><br>
                    <select name="durée_du_stage">
                        <option value="3"> 3 mois </option>
                        <option value="6"> 6 mois </option>
                        <option value="9"> 9 mois </option>
                        <option value="12"> 12 mois </option>
                    </select>
                  </div>

                  <div class="form">
                    <br />
                  <label for="Type de promotion">Type de promotion: </label><br>
                  <select name="Type_de_promotion">
                    <option value="Informatique"> Informatique </option>
                    <option value="S3E"> S3E </option>
                    <option value="BTP"> BTP </option>
                    <option value="Generaliste"> Généraliste </option>
                </select>
                </div>

                <div class="form">
                    <br />
                  <label for="Base de rémunération">Base de rémunération (/mois): </label><br>
                  <input type="number" name="remuneration" id="remuneration" min="250" size="30" required>
                </div>

                <div class="form">
                  <br />
                  <label for="Description">Description</label><br />
                  <textarea type=text name="Description" id="Description" cols="35"></textarea>
                    
            </div>
                <div class="form">
                    <br />
                  <label for="Nombre de places">Nombre de places offertes aux étudiants: </label><br>
                  <input type="number" name="Nbr_places" id="Nbr_places" min="0" size="30" required>
                </div>
                 
                  

                <div>
                  <br />
                  <button type="submit">Valider</button>
                </div>
            </form>
        </fieldset><?php }
}
