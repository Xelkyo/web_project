<?php
/* Smarty version 3.1.39, created on 2021-04-01 09:09:30
  from 'C:\www\Projet\Smarty\searchuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606571aa5d8f94_62882340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4458bf9ceda4bb19f105b9a6237b3e827fa3b404' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\searchuser.tpl',
      1 => 1617235369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606571aa5d8f94_62882340 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="searchresult.css"> 
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Utilisateurs</h1>

            <!-- Création d'un foreach pour afficher chaque candidature-->

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCarte']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
 
                <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                <form method="POST" action="searchuser.php">
                    <section class = " row text-center " >
                        <div class = "row col-sm-12 col-md-12 col-lg-12">    
                            <div class="col-sm-12 col-md-12 col-lg-12"> <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_utilisateur'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->tpl_vars['output']->value['Prenom'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_centre'];?>
</div>
                            <div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_promo'];?>
</div>
                        </div>
                        <input name='ID_UserForm' id='ID_UserForm' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Utilisateur'];?>
">
                        <div class="block">
                            <input type="submit" name="Modifier" value="Modifier" />
                            <input type="submit" name="Supprimer" value="Supprimer" />
                        </div>
                    </section>
                    <br>
                </form>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </article>










<?php }
}
