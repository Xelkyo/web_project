<?php


session_start();
ini_set('display_errors', 'off');
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");

$smarty = new Smarty();






$Nom_Entreprise = $_POST["Nom_Entreprise"];
$localité = $_POST["localité"];
$Secteur_Act = $_POST["Secteur_Act"];
$Nbr_Stagiaires = $_POST["Nbr_Stagiaires"];





  

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
$bdd->quote($string);

$Cartes = "SELECT * FROM `entreprise` INNER JOIN appartient ON entreprise.ID_Entreprise = appartient.ID_Entreprise INNER JOIN secteur_activite ON secteur_activite.ID_Secteur = appartient.ID_Secteur WHERE UPPER(Nom_entreprise) = UPPER('$Nom_Entreprise') OR UPPER(Nom_secteur) = UPPER('$Secteur_Act') OR UPPER(Localite) = UPPER('$localité') OR UPPER(Nombre_de_stagiaires) = UPPER('$Nbr_Stagiaires')";
$requeteCartes = $bdd->prepare($Cartes);
$requeteCartes->execute();
$dataCartes = $requeteCartes->fetchAll();

$smarty->assign('dataCartes', $dataCartes);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchentreprise.html');



    


?>