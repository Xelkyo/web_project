<?php
/* Smarty version 3.1.39, created on 2021-04-01 10:00:08
  from 'C:\www\Projet\Smarty\MesCandidatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60657d885523c3_93311705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '747a4473c1516556a69827e4c5b69ae21ffbe436' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\MesCandidatures.tpl',
      1 => 1617263893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60657d885523c3_93311705 (Smarty_Internal_Template $_smarty_tpl) {
?>        <link rel="stylesheet" type="text/css" href="searchresult.css">
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Candidatures</h1>
            <div>

                <!-- Création d'un foreach pour afficher chaque candidature-->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCarte']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->
                    <form method="POST"  action="MesCandidatures.php" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12">Description de l'offre: <?php echo $_smarty_tpl->tpl_vars['output']->value['Description'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Nom entreprise: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_entreprise'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Date: <?php echo $_smarty_tpl->tpl_vars['output']->value['Date_offre'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Localite: <?php echo $_smarty_tpl->tpl_vars['output']->value['Localite'];?>
</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Etape: <?php echo $_smarty_tpl->tpl_vars['output']->value['Avancement'];?>
</div>
                            </div>
                            <input name='ID_OffreForm' id='ID_OffreForm' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Offre'];?>
">
                            <input name='Avancement' id='Avancement' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['Avancement'];?>
">
                            <input name='ID_usr' id='ID_usr' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['output']->value['ID_Utilisateur'];?>
">
                            <div class="block">
                                <input type="submit" name="EtapeSuivante" value="Etape suivante" />
                                <input type="submit" name="Supprimer" value="Supprimer" />
                            </div> 
                        </section>
                    </form>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </article> <?php }
}
