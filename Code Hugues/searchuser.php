<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();




if(!empty($_POST))
{
    $Carte = "SELECT * FROM `utilisateur` 
    INNER JOIN promo ON utilisateur.ID_Promotion = promo.ID_Promotion 
    INNER JOIN centre ON utilisateur.ID_Centre = centre.ID_Centre 
    WHERE ";
    if(!empty($_POST["Nom_pilote"]))
    {
        $Nom_utilisateur=$_POST["Nom_pilote"];
         $Carte.=" UPPER(Nom_utilisateur) = UPPER('$Nom_utilisateur') AND ";
    }
    if(!empty($_POST["Prenom_pilote"]))
    {
        $Prenom = $_POST["Prenom_pilote"];
        $Carte.=" UPPER(Prenom) = UPPER('$Prenom') AND ";
    }
    if(!empty($_POST["Promotion"]))
    {
        $ID_Promotion = $_POST["Promotion"];
        $Carte.=" UPPER(Nom_promo) = UPPER('$ID_Promotion') and ";
    }
    if(!empty($_POST["Centre"]))
    {

        $ID_Centre = $_POST["Centre"];
        $Carte.="Nom_centre = '$ID_Centre' and ";
    }
    
    $Carte.=" Nom_centre =Nom_centre";
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


$requeteCarte = $bdd->prepare($Carte);
$requeteCarte->execute();
$dataCarte = $requeteCarte->fetchAll();

//$smarty->debugging=true;
$smarty->assign('dataCarte', $dataCarte);
$smarty->display('D:/cesi/logiciel/xampp/www/php/tpl/searchuser.html');



    


?>