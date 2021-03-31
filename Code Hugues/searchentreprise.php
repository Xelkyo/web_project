<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");

$smarty = new Smarty();







if(!empty($_POST))
{
    $Cartes = "SELECT * FROM `entreprise` 
    INNER JOIN appartient ON entreprise.ID_Entreprise = appartient.ID_Entreprise 
    INNER JOIN secteur_activite ON secteur_activite.ID_Secteur = appartient.ID_Secteur 
    WHERE ";
    if(!empty($_POST["Nom_Entreprise"]))
    {
        $Nom_Entreprise=$_POST["Nom_Entreprise"];
         $Cartes.=" UPPER(Nom_entreprise) = UPPER('$Nom_Entreprise') AND ";
    }
    if(!empty($_POST["Secteur_Act"]))
    {
        $Secteur_Act = $_POST["Secteur_Act"];
        $Cartes.=" Nom_secteur = '$Secteur_Act'  AND ";
    }
    if(!empty($_POST["localité"]))
    {
        $localité = $_POST["localité"];
        $Cartes.=" Localite = '$localité' and ";
    }
    if(!empty($_POST["Nbr_Stagiaires"]))
    {
        $Nbr_Stagiaires = $_POST["Nbr_Stagiaires"];
        $Cartes.= "Nombre_de_stagiaire = '$Nbr_Stagiaires'  and ";
    }
    
    $Cartes.=" Nom_secteur =Nom_secteur";
}

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




$requeteCartes = $bdd->prepare($Cartes);
$requeteCartes->execute();
$dataCartes = $requeteCartes->fetchAll();
    
$smarty->assign('dataCartes', $dataCartes);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchentreprise.html');


?>