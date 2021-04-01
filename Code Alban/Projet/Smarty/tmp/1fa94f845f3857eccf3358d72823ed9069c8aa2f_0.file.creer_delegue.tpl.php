<?php
/* Smarty version 3.1.39, created on 2021-04-01 02:58:13
  from 'C:\www\Projet\Smarty\creer_delegue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60651aa5bdd989_14694212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa94f845f3857eccf3358d72823ed9069c8aa2f' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\creer_delegue.tpl',
      1 => 1617238658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60651aa5bdd989_14694212 (Smarty_Internal_Template $_smarty_tpl) {
?>       <link rel="stylesheet" type="text/css" href="creer.css">
        <fieldset>
        
               <form action="creer_delegue.php" method="POST" class="form">

                  <div class="form col-sm-12 col-md-12 col-lg-12" >
                     <br />
                     <label for="Nom">Nom: </label><br>
                     <input type="text" name="Nom_delegue" id="Nom_delegue" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                     <br />
                     <label for="Prenom">Prénom: </label> <br>
                     <input type="text" name="Prenom_delegue" id="Prenom_delegue" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="Centre">Centre: </label><br>
                    <input type="text" name="Centre" id="Centre" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="Promotion">Promotion: </label><br>
                    <input type="text" name="Promotion" id="Promotion" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                    <br />
                  <label for="email">email: </label><br>
                  <input type="email" name="email" id="email" size="30" required>
                </div>

                <div class="form col-sm-12 col-md-12 col-lg-12">
                    <br />
                  <label for="Mot de passe">Mot de passe: </label><br>
                  <input type="password" name="password" id="password" size="30" required>
                </div>
                 
            
                <div>
                  <br />
                  <button type="submit">Valider</button>
                </div>
            </form>
        </fieldset>  <?php }
}
