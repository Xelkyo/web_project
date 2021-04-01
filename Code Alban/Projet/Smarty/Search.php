<?php

    //Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

    include 'Navbar.php';

    //Creation de la requette qui vas donner les droits 

    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd = "SELECT Droit
            FROM droit, utilisateur, possede 
            WHERE utilisateur.ID_Utilisateur=possede.ID_Utilisateur AND
                possede.ID_Droit=droit.ID_Droit AND
                utilisateur.Email='$email' AND
                droit.Droit='Rechercher un compte étudiant' AND
                utilisateur.Mot_de_passe ='$mdp';";

    $sth= $connec->prepare($bdd);
    $sth->bindParam(':Email',$email,PDO::PARAM_STR);
    $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $row = $sth->execute();
    $row = $sth->fetch(PDO::FETCH_LAZY);

    if($row['Droit']=="Rechercher un compte étudiant"){
        $smarty->assign('Recherche', '1');
    }
    else{
        $smarty->assign('Recherche', '0');
    }

    //Affichage des pages .tpl

    $smarty->display('C:\www\Projet\Smarty\Search.tpl');
    $smarty->display('C:\www\Projet\Smarty\Footer.tpl');
?>