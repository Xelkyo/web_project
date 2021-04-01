<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();





$Nom_Entreprise = $_POST["Nom_Entreprise"];
$Secteur_Act = $_POST["Secteur_Act"];
$localité = $_POST["localité"];
$Nbr_Stagiaires = $_POST["Nbr_Stagiaires"];
$email = $_POST["email"];
$Conf_Pilote = $_POST["Conf_Pilote"];



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


$modifentreprise = "UPDATE `entreprise` SET Nom_entreprise = '$Nom_Entreprise', entreprise.Localite = '$localité', Nombre_de_stagiaire = '$Nbr_Stagiaires', Email = '$email' WHERE ID_Entreprise = 2";
$requetemodifentreprise = $bdd->prepare($modifentreprise);
$requetemodifentreprise->execute();
$identre= $bdd->lastInsertId();

    $ifselect = "SELECT secteur_activite.ID_Secteur , COUNT(secteur_activite.ID_Secteur) as oof FROM secteur_activite WHERE secteur_activite.Nom_secteur='$Secteur_Act'";
    $requeteifselect = $bdd->prepare($ifselect);
    $requeteifselect->execute();
    $dataifselect = $requeteifselect->fetchAll();

    $idsect=$dataifselect[0][0];
    if($idsect == NULL)
    {
            $insertmodifentreprisesect = "INSERT INTO `secteur_activite` (Nom_secteur) 
            VALUES  (UPPER('$Secteur_Act'))";
            $requeteinsertmodifentreprisesect = $bdd->prepare($insertmodifentreprisesect);
            $requeteinsertmodifentreprisesect->execute();
            $idsect= $bdd->lastInsertId();
    }
    
    $deleteappart = "DELETE FROM appartient WHERE appartient.ID_Entreprise = '$identre'";
    $insertappart = "INSERT INTO `appartient` (appartient.ID_Entreprise, appartient.ID_Secteur) 
    VALUES  ('$identre' , '$idsect')";
    $requeteinsertappart = $bdd->prepare($insertappart);
    $requeteinsertappart->execute();

?>