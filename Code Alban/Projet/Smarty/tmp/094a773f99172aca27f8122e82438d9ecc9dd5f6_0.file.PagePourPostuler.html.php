<?php
/* Smarty version 3.1.39, created on 2021-03-31 17:26:10
  from 'C:\www\Projet\Smarty\PagePourPostuler.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064949244f5d1_32908475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094a773f99172aca27f8122e82438d9ecc9dd5f6' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\PagePourPostuler.html',
      1 => 1617204362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6064949244f5d1_32908475 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="search.css">
<p>test</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCarte']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
    <link rel="stylesheet" type="text/css" href="search.css">
    <section class = "text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2" >
        <h1>Offre</h1>
        <div class="row">
                <div> Nom de l’entreprise: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_entreprise'];?>
</div>
                <div> Localité: <?php echo $_smarty_tpl->tpl_vars['output']->value['Localite'];?>
</div>
                <div> Durée de stage: <?php echo $_smarty_tpl->tpl_vars['output']->value['Duree'];?>
</div>
                <div> Type de promotion: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nom_type'];?>
</div>
                <div> Base de rémunération: <?php echo $_smarty_tpl->tpl_vars['output']->value['Remuneration'];?>
</div>
                <div> Date de l’offre: <?php echo $_smarty_tpl->tpl_vars['output']->value['Date_Offre'];?>
</div>
                <div> Nombre de places offertes aux étudiants: <?php echo $_smarty_tpl->tpl_vars['output']->value['Nombre_de_place'];?>
</div>
        </div>
    </section>
    
    <section class = "text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
        <h1>Desciption de l'offre</h1>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['output']->value['Description'];?>

        </div>
    </section>

    <form action="Test.tpl" methode="POST"> <!-- oublie pas de le remplir  -->
        <section class = "text-center col-sm-12 col-md-10 col-lg-8  offset-sm-0 offset-md-1 offset-lg-2 ">
        <h1 class = text-center>Postuler</h1>
            <div class="container">
                <div class="row">
                    <div  class="col text-center"> 
                        <!-- Selection un document en PDF qui servira de CV -->
                        <label for="avatar">Selection votre CV:</label><br>
                        <input type="file" id="CV" name="CV" accept=".pdf" required>                    
                    </div>

                    <div  class="col text-center">
                        <!-- Selection un document en PDF qui servira de LM -->
                        <label for="avatar" >Selection votre Lettre de Motivation:</label><br>
                        <input type="file" id="LM" name="LM" accept=".pdf" required>
                    </div>
                </div>
            </div>
            <div>
                <br>
                <button name="button">Postuler</button>
            </div>
        </section>
    </form>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
