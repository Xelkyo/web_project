<?php
/* Smarty version 3.1.39, created on 2021-03-31 23:20:51
  from 'C:\www\Projet\Smarty\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064e7b36918d2_09339377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78dda05c01ed4c1a9160889e92df097f6acacfc' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\Navbar.tpl',
      1 => 1617221450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6064e7b36918d2_09339377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Integration de bootstrap pour faciliter la cration de la navbar --->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Header_footer.css">
        <title>Stageman</title>
    </head>

    <body>

        <!-- Integration de jquery pour faire fonctionner Smarty--->

        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <header>

            <!-- Debut de la navbar --->

            <nav class="navbar navbar-expand-lg justify-content-center"> 
                <a href="Page d accueil.php" class="nounderline"><img src="Stageman logo.png" alt="Stageman logo" class="stageman">Stageman</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class=" navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <?php if ($_smarty_tpl->tpl_vars['postuleroffre']->value == '1') {?>
                        <li class="nav-item">
                            <a id='candidatures'class="nav-link" href="MesCandidatures.php">Mes candidatures</a>
                        </li>
                        <?php }?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Créer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php if ($_smarty_tpl->tpl_vars['creerentre']->value == '1') {?>
                                <a class="dropdown-item" href="Creer_entreprise.php">Entreprise</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['creeroffre']->value == '1') {?>
                                <a class="dropdown-item" href="creer_offre.php">Offre</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['creeretu']->value == '1') {?>
                                <a class="dropdown-item" href="Creer_etudiant.php">Etudiant</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['creerdele']->value == '1') {?>
                                <a class="dropdown-item" href="Creer_delegue.php">Delégué</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['creerpilo']->value == '1') {?>
                                <a class="dropdown-item" href="Creer_pilote.php">Pilote</a>
                                <?php }?>

                            </div>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['rechercher']->value == '1') {?>
                        <li class="nav-item">
                            <a href="Search.php" class="nav-link">Rechercher</a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="Sing in.php" class="nav-link">Sing in / Sing out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<?php }
}
