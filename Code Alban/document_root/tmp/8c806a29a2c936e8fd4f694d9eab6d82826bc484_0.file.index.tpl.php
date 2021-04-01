<?php
/* Smarty version 3.1.39, created on 2021-03-24 14:48:52
  from 'C:\www\document_root\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605b43446fb079_98435719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c806a29a2c936e8fd4f694d9eab6d82826bc484' => 
    array (
      0 => 'C:\\www\\document_root\\tpl\\index.tpl',
      1 => 1616593728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:C:\\www\\document_root\\tpl\\header.tpl' => 1,
    'file:C:\\www\\document_root\\tpl\\footer.tpl' => 1,
  ),
),false)) {
function content_605b43446fb079_98435719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:C:\www\document_root\tpl\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        The forest of Middle Earth :
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'p', false, 'forest');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['forest']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['p']->value == 4) {?>
                and
            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value == 1) {?>
            <?php } else { ?>
                ,
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['forest']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:C:\www\document_root\tpl\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
