<?php
    session_start();
    ini_set('display_errors', 'off');
    include "C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php";

    require_once("C:\www\document_root\smarty-3.1.39\libs\Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir='views';
    $smarty->compile_dir='tmp';

    if(isset($_SESSION['Motdepasse']) and isset($_SESSION['Email'])){
        $smarty->display('C:\www\Projet\Smarty\Sing out.tpl');
        unset($_SESSION["Email"]);
        unset($_SESSION["Motdepasse"]);
    }
    else {
        $smarty->display('C:\www\Projet\Smarty\Sing in.tpl');
        try{
            $connec = new PDO("mysql:host=localhost;dbname=projetweb",'root', '');
            $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST["Email"];
        $mdp = $_POST["Motdepasse"];

        if($email!=NULL and $mdp!=NULL){
            $bdd ="SELECT *, COUNT(*) FROM utilisateur WHERE Email ='$email' and Mot_de_passe ='$mdp';";
            $sth= $connec->prepare($bdd);
            $sth->bindParam(':Email',$email,PDO::PARAM_STR);
            $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
            $row = $sth->execute();
            $row = $sth->fetch(PDO::FETCH_LAZY);
                if ($row['Email']==$email and $row['Mot_de_passe']==$mdp){
                    $_SESSION['Email']=$email;
                    $_SESSION["Motdepasse"]=$mdp;
                    echo "<script language='javascript'>document.location.replace('Page d accueil.php');</script>";
                }
        }
    }
?>