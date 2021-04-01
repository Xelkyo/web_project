<?php 

//Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

include 'NAVBAR.php';

//Recuperation des variables donne par le formulaire de search.tpl

$Nom_Entreprise = $_POST["Nom_Entreprise"];
$localité = $_POST["localité"];
$Secteur_Act = $_POST["Secteur_Act"];
$Nbr_Stagiaires = $_POST["Nbr_Stagiaires"];
$ID_Entreprise = $_POST['ID_Entreprise'];

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

//Creation de la requette pour afficher les entreprises

$Cartes = "SELECT * 
FROM `entreprise` 
INNER JOIN appartient ON entreprise.ID_Entreprise = appartient.ID_Entreprise 
INNER JOIN secteur_activite ON secteur_activite.ID_Secteur = appartient.ID_Secteur 
WHERE UPPER(Nom_entreprise) = UPPER('$Nom_Entreprise') 
OR Nom_secteur = '$Secteur_Act' 
OR Localite = '$localité' 
OR Nombre_de_stagiaire = '$Nbr_Stagiaires'";
$requeteCartes = $bdd->prepare($Cartes);
$requeteCartes->execute();
$dataCartes = $requeteCartes->fetchAll();
$smarty->assign('dataCartes', $dataCartes);

//Affichage des pages .tpl

if (!empty($_POST["Supprimer"])){
    $Cartes = "DELETE FROM `entreprise` WHERE `entreprise`.`ID_Entreprise` = '$ID_Entreprise'";
    $requeteCartes = $bdd->prepare($Cartes);
    $requeteCartes->execute();
    echo 'test';
}

if (!empty($_POST["Modifier"])){
    echo "<script language='javascript'>document.location.replace('modif_entreprise.php');</script>";
}


$smarty->display('C:\www\Projet\Smarty\searchentreprise.tpl');
$smarty->display('C:\www\Projet\Smarty\footer.tpl');
?>