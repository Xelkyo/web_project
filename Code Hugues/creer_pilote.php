<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();






$Nom_utilisateur = $_POST["Nom_pilote"];
$Prenom = $_POST["Prenom_pilote"];
$ID_Centre = $_POST["Centre"];
$ID_Promotion = $_POST["Promotion"];
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

$creepilote = "INSERT INTO `utilisateur` (Nom_utilisateur, Prenom, utilisateur.Role, Email, Mot_de_passe , ID_Centre , ID_Promotion) 
VALUES  (UPPER('$Nom_utilisateur'), UPPER('$Prenom'), 'Pilote', '$email','$password', 
(SELECT centre.ID_Centre from centre WHERE UPPER(centre.Nom_centre)=UPPER('$ID_Centre')),
(SELECT promo.ID_Promotion from promo where UPPER(promo.Nom_promo)=UPPER('$ID_Promotion')) )";




$requetecreepilote = $bdd->prepare($creepilote);
$requetecreepilote->execute();
?>