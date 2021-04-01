<?php
/* Smarty version 3.1.39, created on 2021-03-29 11:22:41
  from 'C:\www\Projet\Smarty\EntrepriseSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60619c615e2743_04058934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff543eacbdff4f25cf1f7faedcd9128d8a64d1fd' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\EntrepriseSearch.tpl',
      1 => 1617009723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60619c615e2743_04058934 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="search.css">
        <fieldset class="select" >
            <form>
                <br>
                <p>
                    Que voulez-vous rechercher ?
                </p>
                <div >
                     <input type="radio" name="search" id="entreprises" value="entreprises" onClick ="javascript:entreprise()">
                     <label for="entreprises">Entreprises</label><br>
<?php }
}
