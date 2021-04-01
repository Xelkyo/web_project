<?php
/* Smarty version 3.1.39, created on 2021-04-01 10:17:23
  from 'C:\www\Projet\Smarty\searchentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60658193e63b45_82944265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0c6aa23123af883a7c02cdae8285efc3ecc57b' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\searchentreprise.tpl',
      1 => 1617265005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60658193e63b45_82944265 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="searchresult.css">
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Entreprise</h1>
            <div>
 
                <!-- Création d'un foreach pour afficher chaque entreprise-->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCartes']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                    <form action="searchentreprise.php" method="POST" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12">Nom entreprise: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_entreprise'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Secteur d'activité: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_secteur'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Localite: <?php echo $_smarty_tpl->tpl_vars['output']->value['Localite'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> <?php echo $_smarty_tpl->tpl_vars['output']->value['Nombre_de_stagiaires'];?>
</div>
                            </div>
                            <input name='ID_EntreFrom' id='ID_EntreFrom' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Entreprise'];?>
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
        
                </div>
        </article>





<?php }
}
