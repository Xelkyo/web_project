<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVEUR</title>
</head>
    <body>
        <?php

            try{
                $connec = new PDO("mysql:host=localhost;dbname=WS7",'root', '');
                $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
            catch(Exception $e)
            {
	            die('Erreur : '.$e->getMessage());
            }

            $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connexion réussie';

            $pseudo = $_POST["pseudo"];
            $mdp = $_POST["mdp"];
            
            /*
            $bdd ='SELECT * FROM utilisateurs WHERE pseudo ='.$pseudo.' and motDePasse ='.$mdp;
            foreach ($conn->query($bdd)as$row) {
                echo '<br>';
                print_r($row);
            }
            
            $reponse = $conn->query('SELECT * FROM utilisateurs');
            while($donnees = $reponse-> fetch()){
            ?>
                <p>
                    <strong>Pseudo</strong> : <?php echo $donnees['pseudo']; ?> <br>
                    Le mot de passe est : <?php echo $donnees['motDePasse']; ?> <br>
                </p>
                <?php
            }*/

            $bdd ="SELECT *, COUNT(*) FROM utilisateurs WHERE pseudo ='$pseudo' and motDePasse ='$mdp';";
            $sth= $connec->prepare($bdd);
            $sth->bindParam(':pseudo',$pseudo,PDO::PARAM_STR);
            $sth->bindParam(':mdp',$mdp,PDO::PARAM_STR);
            $row = $sth->execute();
            $row = $sth->fetch(PDO::FETCH_LAZY);
                if ($row['pseudo']==$pseudo and $row['motDePasse']==$mdp){
                    echo("l'utilisateur est connectée");
                }
                else{
                    echo("l'utilisateur n'existe pas");
                }
            
            
        ?>
    </body>
</html>