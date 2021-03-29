<?php


session_start();
ini_set('display_errors', 'off');
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();






$Nom_utilisateur = $_POST["Nom_pilote"];
$Prenom = $_POST["Prenom_pilote"];
$ID_Promotion = $_POST["Centre"];
$ID_Centre = $_POST["Promotion"];





  

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Carte = "SELECT * FROM `utilisateur` INNER JOIN promo ON utilisateur.ID_Promotion = promo.ID_Promotion INNER JOIN centre ON utilisateur.ID_Centre = centre.ID_Centre WHERE UPPER(Prenom) = UPPER('$Prenom') OR UPPER(Nom_utilisateur) = UPPER('$Nom_utilisateur') OR Nom_centre = '$ID_Centre' OR ID_Promotion = '$ID_Promotion'";
$requeteCarte = $bdd->prepare($Carte);
$requeteCarte->execute();
$dataCarte = $requeteCarte->fetchAll();

$smarty->assign('dataCarte', $dataCarte);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchuser.html');



    


?>