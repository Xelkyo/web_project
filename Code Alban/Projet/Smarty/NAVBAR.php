<?php

    //Creation d'une session par l'appel session_start(); pour pouvoir permetre aux superglobales $_SESSION de fonctionner    

    session_start();

    //Inclusion de smarty (donc a modifier si votre chemin est different)

    include "C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php";
    ini_set('display_errors', 'off');

    require_once("C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir='views';
    $smarty->compile_dir='tmp';

    //Mise en route de la fonction PDO

    try{
        $connec = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    //Recuperation des donnees de connection en superglobales

    $email=$_SESSION['Email'];
    $mdp=$_SESSION["Motdepasse"];

    //Debut de la mofification de la navbar en fonction des droits de l'utilisateur
 
    $navdroit='Postuler à une offre';

    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";

    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Postuler à une offre"){
        $smarty->assign('postuleroffre', '1');
    }
    else{
        $smarty->assign('postuleroffre', '0');
    }

    $navdroit='Créer une entreprise';
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";

    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Créer une entreprise"){
        $smarty->assign('creerentre', '1');
    }
    else{
        $smarty->assign('creerentre', '0');
    }

    $navdroit='Créer une offre';
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";
    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Créer une offre"){
        $smarty->assign('creeroffre', '1');
    }
    else{
        $smarty->assign('creeroffre', '0');
    }

    $navdroit='Créer un compte étudiant';
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";
        $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Créer un compte étudiant"){
        $smarty->assign('creeretu', '1');
    }
    else{
        $smarty->assign('creeretu', '0');
    }

    $navdroit='Créer un compte délégué';
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";
    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Créer un compte délégué"){
        $smarty->assign('creerdele', '1');
    }
    else{
        $smarty->assign('creerdele', '0');
    }


    $navdroit='Créer un compte pilote';
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='$navdroit' AND
                utilisateur.Mot_de_passe ='$mdp';";
    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Créer un compte pilote"){
        $smarty->assign('creerpilo', '1');
    }
    else{
        $smarty->assign('creerpilo', '0');
    }
    
    $navdroit='Rechercher une entreprise';
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit= '$navdroit'AND
                utilisateur.Mot_de_passe ='$mdp';";

    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $sth->bindParam(':navdroit',$navdroit,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Rechercher une entreprise"){
        $smarty->assign('rechercher', '1');
    }
    else{
        $smarty->assign('rechercher', '0');
    }

    //Affichage de la navbar par Navbar.tpl

    $smarty->display('C:\www\Projet\Smarty\Navbar.tpl');
    
?>