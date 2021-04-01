<?php
/* Smarty version 3.1.39, created on 2021-04-01 02:58:15
  from 'C:\www\Projet\Smarty\creer_pilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60651aa7806e03_70289756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98ef27291898851ac6fe636b0fc304a46a9251e' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\creer_pilote.tpl',
      1 => 1617238676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60651aa7806e03_70289756 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="creer.css">
        <fieldset>
               <form action="creer_pilote.php" method="POST" class="form">

                  <div class="form">
                     <br />
                     <label for="Nom">Nom: </label><br>
                     <input type="text" name="Nom_pilote" id="Nom_pilote" size="30" required>
                  </div>

                  <div class="form">
                     <br />
                     <label for="Prenom">Prénom: </label> <br>
                     <input type="text" name="Prenom_pilote" id="Prenom_pilote" size="30" required>
                  </div>

                  <div class="form">
                      <br />
                    <label for="Centre">Centre: </label><br>
                    <input type="text" name="Centre" id="Centre" size="30" required>
                  </div>

                  <div class="form">
                      <br />
                    <label for="Promotion">Promotion: </label><br>
                    <input type="text" name="Promotion" id="Promotion" size="30" required>
                  </div>

                  <div class="form">
                    <br />
                  <label for="email">email: </label><br>
                  <input type="email" name="email" id="email" size="30" required>
                </div>

                <div class="form">
                    <br />
                  <label for="Mot de passe">Mot de passe: </label><br>
                  <input type="password" name="password" id="password" size="30" required>
                </div>
                 
            
                <div>
                  <br />
                  <button type="submit">Valider</button>
                </div>
            </form>
        </fieldset>   
<?php }
}
