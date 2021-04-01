<?php
include 'NAVBAR.php';
$IDoffre=$_POST['ID_OffreForm'];
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$bdd="SELECT ID_Utilisateur
         FROM utilisateur
         WHERE Utilisateur.Email='$email'";
    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $row = $sth->execute(); 
    $row = $sth->fetch(PDO::FETCH_LAZY);
$iduser=$row['ID_Utilisateur'];

$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd="SELECT utilisateur.ID_Utilisateur
         FROM utilisateur, postule
         WHERE Utilisateur.ID_Utilisateur=postule.ID_Utilisateur AND
               Utilisateur.Email='$email' AND
               postule.ID_offre='$IDoffre'";
    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':IDoffre',$IDoffre,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);
if (!empty($_POST["Postuler"])){
    if($row['ID_Utilisateur']==NULL){
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Cartes = " SELECT * FROM offre INNER JOIN entreprise 
        ON offre.ID_Entreprise = entreprise.ID_Entreprise 
        INNER JOIN disponible_pour ON disponible_pour.ID_Offre = offre.ID_Offre 
        INNER JOIN type_promo ON type_promo.ID_Type = disponible_pour.ID_Type 
        INNER JOIN demande ON demande.ID_Offre = offre.ID_Offre 
        INNER JOIN competence ON competence.ID_Competence = demande.ID_Competence  
        WHERE Offre.ID_offre='$IDoffre'";
        $requeteCartes = $connec->prepare($Cartes);
        $requeteCartes->execute();
        $dataCarte = $requeteCartes->fetchAll();
        $smarty->assign('dataCarte', $dataCarte);
        $smarty->display('C:\www\Projet\Smarty\PagePourPostuler.tpl');
    }
    else{
        echo "<link rel='stylesheet' type='text/css' href='Footer absolute.css'>";
        echo "VOUS AVEZ DEJA POSTULE A CETTE OFFRE";
    }
}
if (!empty($_POST["Supprimer"])){
    echo 'supprimer';
}

if (!empty($_POST["Modifier"])){
    echo 'Modifier';
}
$smarty->display('C:\www\Projet\Smarty\Footer.tpl');
?>