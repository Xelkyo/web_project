<?php

include 'NAVBAR.php';

$Nom_Entreprise = $_POST["Nom_Entreprise"];
$Secteur_Act = $_POST["Secteur_Act"];
$localité = $_POST["localité"];
$Nbr_Stagiaires = $_POST["Nbr_Stagiaires"];
$newemail = $_POST["email"];
$Conf_Pilote = $_POST["Conf_Pilote"];
$ID_EntreFrom = $_POST["ID_EntreFrom"];


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


$modifentreprise = "UPDATE `entreprise` SET Nom_entreprise = '$Nom_Entreprise', entreprise.Localite = '$localité', Nombre_de_stagiaire = '$Nbr_Stagiaires', Email = '$newemail' WHERE ID_Entreprise = '$ID_EntreFrom'";
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
    $requetedeleteappart = $bdd->prepare($deleteappart);
    $requetedeleteappart->execute();

    $insertappart = "INSERT INTO `appartient` (appartient.ID_Entreprise, appartient.ID_Secteur) 
    VALUES  ('$identre' , '$idsect')
    FROM appartient INNER JOIN  entreprise ON entreprise.ID_Entreprise = appartient.ID_Entreprise 
    INNER JOIN secteur_activite ON secteur_activite.ID_Secteur = appartient.ID_Secteur ";
    $requeteinsertappart = $bdd->prepare($insertappart);
    $requeteinsertappart->execute();


    $smarty->display('C:\www\Projet\Smarty\modif_entreprise.tpl');
    $smarty->display('C:\www\Projet\Smarty\footer.tpl');

?>