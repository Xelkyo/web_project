<?php
    session_start();
    ini_set('display_errors', 'off');
    include "C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php";
    
    require_once("C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir='views';
    $smarty->compile_dir='tmp';

    $smarty->display('C:\www\Projet\Smarty\Page d accueil.tpl');

    try{
        $connec = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>