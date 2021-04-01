<?php
/* Smarty version 3.1.39, created on 2021-04-01 00:15:40
  from 'C:\www\Projet\Smarty\Sing in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064f48ce5a990_01610609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ad61e55db6f022b9c2af19dca9f82a3d48f9a3' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\Sing in.tpl',
      1 => 1617225622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6064f48ce5a990_01610609 (Smarty_Internal_Template $_smarty_tpl) {
?>    <link rel="stylesheet" type="text/css" href="Sing in.css">
    <fieldset >

        <!-- Création d'un formulaire pour transmetre les champs au PHP-->

        <form action="Sing in.php" method="POST">
            <div class="form">
                <label for="Email">Email: </label><br>
                <input type="text" name="Email" id="Email" class="input_form" size="30" required>
            </div>

            <div class="form">
                <label for="Motdepasse">Mot de passe: </label><br>
                <input type="text" name="Motdepasse" id="Motdepasse" class="input_form" size="30" required>
            </div>
            <button>
                Sing in
            </button>
        </form>
    </fieldset><?php }
}
