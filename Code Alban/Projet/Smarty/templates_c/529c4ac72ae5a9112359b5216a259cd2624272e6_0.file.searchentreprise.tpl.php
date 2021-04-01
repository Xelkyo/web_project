<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:39:04
  from 'C:\www\Projet\Smarty\searchentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062ffc8ad0ba3_54639026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529c4ac72ae5a9112359b5216a259cd2624272e6' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\searchentreprise.tpl',
      1 => 1617100055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062ffc8ad0ba3_54639026 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        </article>





<?php }
}
