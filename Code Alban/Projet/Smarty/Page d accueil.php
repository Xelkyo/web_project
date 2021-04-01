<?php

    //Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

    include 'Navbar.php';

    //Affichage des pages .tpl

    $smarty->display('C:\www\Projet\Smarty\Page d accueil.tpl');
    $smarty->display('C:\www\Projet\Smarty\footer.tpl');
?>