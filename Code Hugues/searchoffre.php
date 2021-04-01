<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();




$of=0;
if($_GET)
{
    $of = $_GET["page"]*3;


    
}
if($of==0)
    {  
        $smarty->assign('prec', 0);
        $smarty->assign('suiv', $of+1);
    }
    if($of>0)
    {  
        $smarty->assign('prec', ($of/3)-1);
        $smarty->assign('suiv', ($of/3)+1);
    }




    $Cartes = "SELECT * FROM `offre` 
INNER JOIN entreprise ON offre.ID_Entreprise = entreprise.ID_Entreprise 
INNER JOIN disponible_pour ON disponible_pour.ID_Offre = offre.ID_Offre 
INNER JOIN type_promo ON type_promo.ID_Type = disponible_pour.ID_Type 
INNER JOIN demande ON demande.ID_Offre = offre.ID_Offre 
INNER JOIN competence ON competence.ID_Competence = demande.ID_Competence  
    WHERE ";
if(!empty($_POST))
{
    if(!empty($_POST["Nom_entreprise"]))
    {
        $Nom_entreprise=$_POST["Nom_entreprise"];
         $Cartes.=" UPPER(Nom_entreprise) = UPPER('$Nom_entreprise') AND ";
    }
    if(!empty($_POST["competence"]))
    {
        $competence = $_POST["competence"];
        $Cartes.=" UPPER(competence) = UPPER('$competence') AND ";
    }
    if(!empty($_POST["Localite"]))
    {
        $Localite = $_POST["Localite"];
        $Cartes.=" offre.Localite = '$Localite' and ";
    }
    if(!empty($_POST["durée_du_stage"]))
    {

        $Duree = $_POST["durée_du_stage"];
        $Cartes.= "Duree = '$Duree'  and ";
    }
    if(!empty($_POST["Type_de_promotion"]))
    {

        $Type_de_promotion = $_POST["Type_de_promotion"];
        $Cartes.= "UPPER(Nom_Type) = UPPER('$Type_de_promotion') and ";
    }
    if(!empty($_POST["Nombre_de_place"]))
    {

        $Nombre_de_place = $_POST["Nombre_de_place"];
        $Cartes.= " UPPER(Nombre_de_place) = UPPER('$Nombre_de_place') and ";
    }

}
    $Cartes.=" Duree =Duree LIMIT 3 OFFSET $of ";





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
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchoffre.html');




?>