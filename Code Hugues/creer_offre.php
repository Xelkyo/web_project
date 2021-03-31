<?php


session_start();
require("D:/cesi/logiciel/xampp/www/php/smarty/Smarty.class.php");
$smarty = new Smarty();






$Nom_Entreprise = $_POST["Nom_entreprise"];
$Comptences = $_POST["Comptences"];
$Localite = $_POST["Localite"];
$durée_du_stage = $_POST["durée_du_stage"];
$Type_de_promotion = $_POST["Type_de_promotion"];
$remuneration = $_POST["remuneration"];
$Nbr_places = $_POST["Nbr_places"];
$Description = $_POST["Description"];


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



    $select = "SELECT entreprise.ID_Entreprise FROM entreprise WHERE entreprise.Nom_entreprise='$Nom_Entreprise'";
    $requeteselect = $bdd->prepare($select);
    $requeteselect->execute();
    $dataselect = $requeteselect->fetchAll();
    $varaibleselect=$dataselect[0][0];




    
$creeoffre = "INSERT INTO `offre` (offre.Localite, offre.Duree, offre.Date_offre, offre.Remuneration, offre.Nombre_de_place, offre.Description, offre.ID_Entreprise)  
VALUES  ('$Localite', '$durée_du_stage', CURRENT_DATE ,'$remuneration', '$Nbr_places', '$Description', '$varaibleselect')";
$requetecreeoffre = $bdd->prepare($creeoffre);
$requetecreeoffre->execute();
$idoffre= $bdd->lastInsertId();
    



$compt = "SELECT Competence.ID_Competence , COUNT(Competence.ID_Competence) as ree FROM competence WHERE Competence.Competence ='$Comptences'";
$requetecompt = $bdd->prepare($compt);
$requetecompt->execute();
$datacompt = $requetecompt->fetchAll();

$idcompt=$datacompt[0][0];

if($idcompt == NULL)
{
        $insertcreeentreprisesect = "INSERT INTO Competence (Competence)  VALUES  (UPPER('$Comptences'))";
        $requeteinsertcreeoffre = $bdd->prepare($insertcreeentreprisesect);
        $requeteinsertcreeoffre->execute();
        $idcompt= $bdd->lastInsertId();
}

$insertdemande = "INSERT INTO demande (demande.ID_Offre, demande.ID_Competence) VALUES  ('$idoffre' , '$idcompt')";
$requeteinsertdemande = $bdd->prepare($insertdemande);
$requeteinsertdemande->execute();



$type = "SELECT type_promo.ID_Type  FROM type_promo WHERE type_promo.Nom_Type ='$Type_de_promotion'";
$requetetype = $bdd->prepare($type);
$requetetype->execute();
$datatype = $requetetype->fetchAll();
$idtype =$datatype[0][0];


$insertdis = "INSERT INTO disponible_pour (disponible_pour.ID_Offre, disponible_pour.ID_Type)
VALUES  ('$idoffre' , '$idtype')";
$requeteinsertdis = $bdd->prepare($insertdis);
$requeteinsertdis->execute();


?>