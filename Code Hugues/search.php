
<?php


    session_start();
    ini_set('display_errors', 'off');
    
    require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir='views';
    $smarty->compile_dir='tmp';

  




try{
                $bdd = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

catch(Exception $e)
    {
                die('Erreur : '.$e->getMessage());
    }

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$bdd->quote($string);




$smarty->assign('utilisateur', $datasearchuser);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/search.html');






?>