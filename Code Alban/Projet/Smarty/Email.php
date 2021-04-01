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

$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requette ="SELECT entreprise.Email
            FROM entreprise, offre
            WHERE offre.ID_Entreprise=entreprise.ID_Entreprise AND
                offre.ID_Offre='$IDoffre'"
$sth= $connec->prepare($requette);
$sth->bindParam(':IDoffre',$IDoffre,PDO::PARAM_STR);
$row = $sth->execute();
$row = $sth->fetch(PDO::FETCH_LAZY);

$EmailEntre='alban.cabrol81@gmail.com';

$sujet = 'Demande de stage';
$entete ="from: $Email \n";
$entete .="Reply-to: $Email \n";
$msg = "Quelqu'un veux postuler dans votre entreprise !";
mail($EmailEntre,$sujet,$msg,$entete);

/*
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd="INSERT INTO `postule`(ID_Utilisateur, ID_Offre, ID_Avancement)
                VALUES ('$iduser', '$IDoffre', '1')";
        $sth = $connec->prepare($bdd);
        $sth->bindParam(':iduser',$iduser,PDO::PARAM_STR);
        $sth->bindParam(':IDoffre',$IDoffre,PDO::PARAM_STR);
        $sth->execute();
        $row = $sth->execute();
        $row = $sth->fetch(PDO::FETCH_LAZY); 
*/
?>