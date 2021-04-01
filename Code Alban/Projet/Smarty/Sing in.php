<?php

    //Inclusion de NAVBAR.php qui contient les liens vers bootstrap et jquery et la navbar

    include 'NAVBAR.php';

    //Mise en place de la page de sing out avec une condition qui identifie si nous sommes deja connecte

    if(isset($_SESSION['Motdepasse']) and isset($_SESSION['Email'])){

        //Affichage de la page sing out.tpl

        $smarty->display('C:\www\Projet\Smarty\Sing out.tpl');

        //Suppression des superglobales $_SESSION

        unset($_SESSION["Email"]);
        unset($_SESSION["Motdepasse"]);
    }

    //Mise en place de la page de sing in avec une condition qui identifie si nous ne sommes pas connecte

    else {

        //Affichage de la page sing in.tpl

        $smarty->display('C:\www\Projet\Smarty\Sing in.tpl');

        //Mise en route de la fonction PDO

        try{
            $connec = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
            $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Recuperation des variables donne par le formulaire de sing in.tpl

        $email = $_POST["Email"];
        $mdp = $_POST["Motdepasse"];

        //Creation d'une requette pour verrifier si l'email et le mot de passe sont corrects

        if($email!=NULL and $mdp!=NULL){
            $bdd ="SELECT *, COUNT(*) FROM utilisateur WHERE Email ='$email' and Mot_de_passe ='$mdp';";
            $sth= $connec->prepare($bdd);
            $sth->bindParam(':Email',$email,PDO::PARAM_STR);
            $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
            $row = $sth->execute();
            $row = $sth->fetch(PDO::FETCH_LAZY);
            if ($row['Email']==$email and $row['Mot_de_passe']==$mdp){

                //Creation des superglobales $_SESSION

                $_SESSION['Email']=$email;
                $_SESSION["Motdepasse"]=$mdp;

                //Redirection vers la page d'accueil

                echo "<script language='javascript'>document.location.replace('Page d accueil.php');</script>";
            }
        }
    }

    $smarty->display('C:\www\Projet\Smarty\footer.tpl');
?>