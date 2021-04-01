<?php
/* Smarty version 3.1.39, created on 2021-03-29 23:08:06
  from 'C:\www\Projet\Smarty\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606241b6abfd67_09623238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8514a8b20ff1b4aa1c8117c10e9a12aa40226070' => 
    array (
      0 => 'C:\\www\\Projet\\Smarty\\Header.tpl',
      1 => 1617052085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606241b6abfd67_09623238 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Header_footer.css">
        <link rel="stylesheet" type="text/css" href="Page_accueil.css">
        <title>Stageman</title>
    </head>

    <body>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <header>
            <nav class="navbar navbar-expand-lg justify-content-center"> 
                <a href="Page_accueil.php" class="nounderline"><img src="Stageman logo.png" alt="Stageman logo" class="stageman">Stageman</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class=" navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Mes candidatures.html">Mes candidatures</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Créer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="Creer etudiant.html">Etudiant</a>
                                <a class="dropdown-item" href="Creer delegue.html">Delégué</a>
                                <a class="dropdown-item" href="Creer pilote.html">Pilote</a>
                                <a class="dropdown-item" href="Creer entreprise.html">Entreprise</a>
                                <a class="dropdown-item" href="creer_offre.html">Offre</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="Rechercher.html" class="nav-link">Rechercher</a>
                        </li>
                        <li class="nav-item">
                            <a href="Sing in.php" class="nav-link">Sing in / Sing out</a>
                        </li>
                    </ul>
                </div>
              </nav>
        </header>
        <?php }
}
