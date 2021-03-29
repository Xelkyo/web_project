<?php


session_start();
ini_set('display_errors', 'off');
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();






$ID_Entreprise_1 = $_POST["Nom_entreprise"];
$Comptences = $_POST["Comptences"];
$localité = $_POST["Localite"];
$Duree = $_POST["durée_du_stage"];
$Type_de_promotion = $_POST["Type_de_promotion"];
$Nombre_de_place = $_POST["Nbr_places"];





  

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

$Cartes = "SELECT * FROM `offres` INNER JOIN entreprise ON offres.ID_Entreprise_1 = entreprise.ID_Entreprise INNER JOIN demande ON demande.ID_Offre = offres.ID_Offre INNER JOIN competence ON competence.ID_Competence = demande.ID_Competence WHERE UPPER(ID_Entreprise_1) = UPPER('$ID_Entreprise_1')  OR Localite = '$localité'/* faut pas oublier de mettre competence et type de promo */ OR  UPPER(Duree) = UPPER('$Duree') OR Nombre_de_place = '$Nombre_de_place'";
$requeteCartes = $bdd->prepare($Cartes);
$requeteCartes->execute();
$dataCartes = $requeteCartes->fetchAll();

$smarty->assign('dataCartes', $dataCartes);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchoffre.html');



    


?>