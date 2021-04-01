<?php
/* Smarty version 3.1.39, created on 2021-04-01 02:58:25
  from 'C:\www\Projet\Smarty\searchoffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60651ab1c05a35_64251094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcbf7f5d1f3f04de17bf8ec8646584287879c9f2' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\searchoffre.tpl',
      1 => 1617235368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60651ab1c05a35_64251094 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="searchresult.css">

        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">offres</h1>
            <div>

                <!-- Création d'un foreach pour afficher chaque offre-->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCartes']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                    <form method="POST"  action="PagePourPostuler.php" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12"> Nom de l'Entreprise: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_entreprise'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Description: <?php echo $_smarty_tpl->tpl_vars['output']->value['Description'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Localité: <?php echo $_smarty_tpl->tpl_vars['output']->value['Localite'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Durée du stage: <?php echo $_smarty_tpl->tpl_vars['output']->value['Duree'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Nombre de places offertes aux étudiants: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nombre_de_place'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> competence: <?php echo $_smarty_tpl->tpl_vars['output']->value['competence'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> ID_Offre: <?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Offre'];?>
</div>
                            </div>
                            <input name='ID_OffreForm' id='ID_OffreForm' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Offre'];?>
">
                            <div class="block">
                                <?php if ($_smarty_tpl->tpl_vars['postuleroffre']->value == '1') {?>
                                <input type="submit" name="Postuler" value="Postuler" />
                                <?php }?>
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
