<?php

include 'NAVBAR.php';

$Nom_utilisateur = $_POST["Nom_pilote"];
$Prenom = $_POST["Prenom_pilote"];
$ID_Centre = $_POST["Centre"];
$ID_Promotion = $_POST["Promotion"];
$newemail = $_POST["email"];
$password = $_POST["password"];
$null = null;


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


$centr = "SELECT centre.ID_Centre , COUNT(centre.ID_Centre) as ree FROM centre WHERE centre.Nom_centre ='$ID_Centre'";
$requetecentr = $bdd->prepare($centr);
$requetecentr->execute();
$datacentr = $requetecentr->fetchAll();

$idcentr=$datacentr[0][0];

if($Nom_utilisateur!=NULL){
if($idcentr == NULL)
{   
        $cree_centr = "INSERT INTO centre (Nom_centre)  VALUES  (UPPER('$ID_Centre'))";
        $requetecree_centr = $bdd->prepare($cree_centr);
        $requetecree_centr->execute();
        $idcentr= $bdd->lastInsertId();
}


$prom = "SELECT promo.ID_Type  FROM promo WHERE promo.Nom_promo ='$ID_Promotion'";
$requeteprom = $bdd->prepare($prom);
$requeteprom->execute();
$dataprom = $requeteprom->fetchAll();
$idprom =$dataprom[0][0];


$creepilote = "INSERT INTO `utilisateur` (Nom_utilisateur, Prenom, utilisateur.Role, Email, Mot_de_passe , ID_Promotion, ID_Centre) 
VALUES  (UPPER('$Nom_utilisateur'), UPPER('$Prenom'), 'Pilote', '$newemail','$password','$idprom', '$idcentr')";
$requetecreepilote = $bdd->prepare($creepilote);
$requetecreepilote->execute();
$idpilote= $bdd->lastInsertId();

$insertgere = "INSERT INTO gere (gere.ID_Utilisateur, gere.ID_Promotion)
VALUES  ('$idpilote' , '$idprom')";
$requeteinsertgere = $bdd->prepare($insertgere);
$requeteinsertgere->execute();
}

$smarty->display('C:\www\Projet\Smarty\creer_pilote.tpl');
$smarty->display('C:\www\Projet\Smarty\footer.tpl');



?>