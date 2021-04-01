<?php
 
//Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

include 'NAVBAR.php';

//Recuperation des variables donne par le formulaire de search.tpl

$Nom_utilisateur = $_POST["Nom_pilote"];
$Prenom = $_POST["Prenom_pilote"];
$ID_Promotion = $_POST["Centre"];
$ID_Centre = $_POST["Promotion"];
$ID_UserForm = $_POST["ID_UserForm"];

//Mise en route de la fonction PDO

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

//Creation de la requette pour afficher les offres

$Carte = "SELECT * FROM `utilisateur` INNER JOIN promo ON utilisateur.ID_Promotion = promo.ID_Promotion INNER JOIN centre ON utilisateur.ID_Centre = centre.ID_Centre WHERE UPPER(Prenom) = UPPER('$Prenom') OR UPPER(Nom_utilisateur) = UPPER('$Nom_utilisateur') OR Nom_centre = '$ID_Centre' OR Nom_promo = '$ID_Promotion'";
$requeteCarte = $bdd->prepare($Carte);
$requeteCarte->execute();
$dataCarte = $requeteCarte->fetchAll();
$smarty->assign('dataCarte', $dataCarte);

//Affichage des pages .tpl

$smarty->display('C:\www\Projet\Smarty\searchuser.tpl');
$smarty->display('C:\www\Projet\Smarty\footer.tpl');

if (!empty($_POST["Supprimer"])){
    $Cartes = "DELETE FROM `utilisateur` WHERE `utilisateur`.`ID_Utilisateur` = '$ID_UserForm'";
    $requeteCartes = $bdd->prepare($Cartes);
    $requeteCartes->execute();
    echo $Cartes;
}

if (!empty($_POST["Modifier"])){
    echo 'Modifier';
}
?>