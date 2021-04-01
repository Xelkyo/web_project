<?php 

//Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

include 'NAVBAR.php';

//Recuperation des variables donne par le formulaire de search.tpl

$Nom_entreprise = $_POST["Nom_entreprise"];
$Comptences = $_POST["Comptences"];
$localite = $_POST["Localite"]; 
$Duree = $_POST["durée_du_stage"];
$Type_de_promotion = $_POST["Type_de_promotion"];
$Nombre_de_place = $_POST["Nbr_places"];

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

$Cartes = " SELECT * FROM `offre` INNER JOIN entreprise 
ON offre.ID_Entreprise = entreprise.ID_Entreprise 
INNER JOIN disponible_pour ON disponible_pour.ID_Offre = offre.ID_Offre 
INNER JOIN type_promo ON type_promo.ID_Type = disponible_pour.ID_Type 
INNER JOIN demande ON demande.ID_Offre = offre.ID_Offre 
INNER JOIN competence ON competence.ID_Competence = demande.ID_Competence  
WHERE UPPER(Nom_entreprise) = UPPER('$Nom_entreprise') 
OR offre.Localite = '$localite' 
OR UPPER(Competence) = UPPER('$Comptences') 
OR  UPPER(Nom_Type) = UPPER('$Type_de_promotion') 
OR  Duree = '$Duree' 
OR UPPER(Nombre_de_place) = UPPER('$Nombre_de_place')";
$requeteCartes = $bdd->prepare($Cartes);
$requeteCartes->execute();
$dataCartes = $requeteCartes->fetchAll();
$smarty->assign('dataCartes', $dataCartes);

//Affichage des pages .tpl

$smarty->display('C:\www\Projet\Smarty/searchoffre.tpl');
$smarty->display('C:\www\Projet\Smarty\Footer.tpl');
    


?>