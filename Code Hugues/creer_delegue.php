<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();



$Nom_utilisateur = $_POST["Nom_delegue"];
$Prenom = $_POST["Prenom_delegue"];
$ID_Promotion = $_POST["Promotion"];
$ID_Centre = $_POST["Centre"];
$email = $_POST["email"];
$password = $_POST["password"];


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

if($idcentr == NULL)
{
        $cree_centr = "INSERT INTO centre (Nom_centre)  VALUES  (UPPER('$ID_Centre'))";
        $requetecree_centr = $bdd->prepare($cree_centr);
        $requetecree_centr->execute();
        $idcentr= $bdd->lastInsertId();
}


$creedelegue = "INSERT INTO `utilisateur` (Nom_utilisateur, Prenom, utilisateur.Role, Email, Mot_de_passe , ID_Promotion, ID_Centre) 
VALUES  (UPPER('$Nom_utilisateur'), UPPER('$Prenom'), 'Délégué', '$email','$password',(SELECT promo.ID_Promotion from promo where UPPER(promo.Nom_promo)=UPPER('$ID_Promotion')), '$idcentr')";
$requetecreedelegue = $bdd->prepare($creedelegue);
$requetecreedelegue->execute();



?>