<?php
$login = $_POST["login"];
$mdp = $_POST["mdp"];

$host = $_SERVER['HTTP_HOST']; // on récupère le nom de l'hôte
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // on récupère le début de l'URL

if ($login == "admin" && $mdp == "azerty" ) {
    header("Location://$host$uri/profil.html");
} else {
    header("Location://$host$uri/index.html");
}
?>