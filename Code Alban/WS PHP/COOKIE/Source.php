<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miam</title>
</head>
<body>
    <?php
        include("../secret.php");
        $param = $secret;
        session_start();
        $_SESSION['name']=$param;
        echo $_SESSION['name'];
    ?>
    <a href="Destination.php" >Jvounik</a>
</body>
</html>