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

$creeentreprise = "INSERT INTO `entreprise` (Nom_entreprise, entreprise.Localite, Nombre_de_stagiaire, Email) 
VALUES  (UPPER('$Nom_Entreprise'), '$localité', '$Nbr_Stagiaires' ,'$email')";
$requetecreeentreprise = $bdd->prepare($creeentreprise);
$requetecreeentreprise->execute();
$varaibleentre= $bdd->lastInsertId();


    $ifselect = "SELECT secteur_activite.ID_Secteur , COUNT(secteur_activite.ID_Secteur) as oof FROM secteur_activite WHERE
    secteur_activite.Nom_secteur='$Secteur_Act'";
    $requeteifselect = $bdd->prepare($ifselect);
    $requeteifselect->execute();
    $dataifselect = $requeteifselect->fetchAll();

    $varaiblesect=$dataifselect[0][0];
    if($varaiblesect == NULL)
    {
            $insertcreeentreprisesect = "INSERT INTO `secteur_activite` (Nom_secteur) 
            VALUES  (UPPER('$Secteur_Act'))";
            $requeteinsertcreeentreprisesect = $bdd->prepare($insertcreeentreprisesect);
            $requeteinsertcreeentreprisesect->execute();
            $varaiblesect= $bdd->lastInsertId();
    }
    
    $insertappart = "INSERT INTO `appartient` (appartient.ID_Entreprise, appartient.ID_Secteur) 
    VALUES  ('$varaibleentre' , '$varaiblesect')";
    $requeteinsertappart = $bdd->prepare($insertappart);
    $requeteinsertappart->execute();

?>