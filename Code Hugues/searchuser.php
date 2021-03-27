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


$Carte = "SELECT Prenom, Nom_utilisateur, ID_Promotion, ID_Centre FROM `utilisateur` WHERE Prenom = '$Prenom' OR Nom_utilisateur = '$Nom_utilisateur' OR ID_Promotion = '$ID_Promotion' OR ID_Centre = '$ID_Centre'";
$requeteCarte = $bdd->prepare($Carte);
$requeteCarte->execute();
$dataCarte = $requeteCarte->fetchAll();

$smarty->assign('dataCarte', $dataCarte);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchuser.html');






?>