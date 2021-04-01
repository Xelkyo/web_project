<?php

echo 'Bonjour ' . htmlspecialchars($_GET["param"]) . '!<br/>';
echo 'Le nombre de caractere est de : ' .mb_strlen(htmlspecialchars($_GET["param"]));

?>
