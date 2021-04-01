<?php
$EmailEntre='alban.cabrol81@gmail.com';
$Email='alban.cabrol@gmail.fr';

$sujet = 'Demande de stage';
$entete ="from: $Email \n";
$entete .="Reply-to: $Email \n";
$msg = "Quelqu'un veux postuler dans votre entreprise !";
mail($EmailEntre,$sujet,$msg,$entete);

?>