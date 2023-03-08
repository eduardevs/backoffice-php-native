<?php

$online = false;

if (!$online) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $bdd = "sitebasic";
} else {
    $host = "fouri par l'hébergeur";
    $user = "fouri par l'hébergeur";
    $password = "fouri par l'hébergeur";
    $bdd = "fouri par l'hébergeur";
}

$connexion = mysqli_connect($host, $user, $password, $bdd);

mysqli_query($connexion, "SET NAMES 'utf8'");
