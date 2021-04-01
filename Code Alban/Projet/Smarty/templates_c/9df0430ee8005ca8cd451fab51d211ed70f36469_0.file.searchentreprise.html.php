<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:38:26
  from 'C:\www\Projet\Smarty\je veux mourir\searchentreprise.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062ffa2522c95_58016924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df0430ee8005ca8cd451fab51d211ed70f36469' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\je veux mourir\\searchentreprise.html',
      1 => 1617093653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062ffa2522c95_58016924 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="searchresult.css" />
        <link rel="stylesheet" href="fontawesome/css/all.min.css">


    <title>searchuser</title>

    </head>

    <body>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="D:/cesi/2e année/4.Projet WEB/0.Projet Web/CodeWebProject/assets/vendors/jquery/jquery-3.5.1.min"><?php echo '</script'; ?>
>


        


        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Entreprise</h1>
            <div>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCartes']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                    <section class = " row text-center " >
                        <div class = "row col-sm-12 col-md-12 col-lg-12">    
                            <div class="col-sm-12 col-md-12 col-lg-12"> <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_entreprise'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"> <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_secteur'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->tpl_vars['output']->value['Localite'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->tpl_vars['output']->value['Nombre_de_stagiaires'];?>
</div>
                        </div>

                    <aside>
                        <!-- Ici lien pour ajout BDD --><i class="far fa-trash-alt"></i>
                        <!-- Ici lien pour ajout BDD --><i class="far fa-heart"></i>
                        <!-- Ici lien pour ajout BDD --><i class="far fa-bookmark"></i>
                    </aside>
                    
                    </section>
                    <br>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
                </div>
                
    </body> 
</html> 







<?php }
}
