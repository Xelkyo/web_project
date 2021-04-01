<?php

//Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

include 'NAVBAR.php';

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

//Creation de la requette pour afficher les candidatures


$BDD_usr="SELECT ID_Utilisateur
FROM Utilisateur
WHERE utilisateur.Email='$email'";
$requeteusr = $bdd->prepare($BDD_usr);
$row = $requeteusr->execute();
$row = $requeteusr->fetch(PDO::FETCH_LAZY);
$ID_usr = $row['ID_Utilisateur'];

$Carte="SELECT `Description`, Nom_entreprise, Date_offre, Avancement, entreprise.Localite, postule.ID_Offre, postule.ID_Utilisateur
        FROM entreprise, avancement, postule, Utilisateur, Offre
        WHERE avancement.ID_avancement=postule.ID_Avancement AND
              postule.ID_Utilisateur=utilisateur.ID_Utilisateur AND
              postule.ID_Offre=offre.ID_Offre AND
              offre.ID_Entreprise=entreprise.ID_Entreprise AND
              utilisateur.Email='$email'";

$requeteCarte = $bdd->prepare($Carte);
$requeteCarte->execute();
$dataCarte = $requeteCarte->fetchAll();
$smarty->assign('dataCarte', $dataCarte);


$smarty->display('C:\www\Projet\Smarty\MesCandidatures.tpl');
$smarty->display('C:\www\Projet\Smarty\footer.tpl');

//Recuperation des variables donne par le formulaire de mes candidatures.tpl

$Avancement=$_POST['Avancement'];
$IDoffre=$_POST['ID_OffreForm'];

//Creation de la requette pour signaler au systeme que l'on passe a l'etape suivante

if($IDoffre!=NULL){
if (!empty($_POST["EtapeSuivante"])){

    $Avancement++;
    $requet="UPDATE Postule 
    SET Postule.ID_Avancement='$Avancement'
    WHERE
    (SELECT DISTINCT utilisateur.ID_Utilisateur from utilisateur,postule WHERE utilisateur.Email='$email')=postule.ID_Utilisateur and 
    postule.ID_Offre='$IDoffre'";
    $requeteCarte = $bdd->prepare($requet);
    $requeteCarte->execute();
    echo "<script language='javascript'>document.location.replace('MesCandidatures.php');</script>";

    }

//Creation de la requette pour signaler au systeme que l'on veux supprimer
if (!empty($_POST['Supprimer'])){
    $Cartes = "DELETE FROM `postule` WHERE `postule`.`ID_Offre` = '$IDoffre' AND `postule`.`ID_Utilisateur` = '$ID_usr'";
    $requeteCartes = $bdd->prepare($Cartes);
    $requeteCartes->execute();
    echo "<script language='javascript'>document.location.replace('MesCandidatures.php');</script>";
}
}
//Affichage de la page .tpl

?>