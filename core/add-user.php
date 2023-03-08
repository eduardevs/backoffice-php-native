<?php

session_start();
require('./connexion.php');

// password
// ? pourquoi UTF -8 ?
$firstname = addslashes(mb_convert_case(strtolower($_POST['firstname']), MB_CASE_TITLE, 'UTF-8'));
$lastname = addslashes(mb_convert_case(strtolower($_POST['lastname']), MB_CASE_TITLE, 'UTF-8'));
$username = addslashes(strtolower($_POST['username']));
// $password_field = trim($_POST['password']);
// $password = password_hash($password_field, PASSWORD_DEFAULT);
// ? c'est quoi cost in the options
$options = ['cost'=> 12];
// * Better in one line to handle password
$password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT, $options);
// $username = mb_convert_case() REGAPASSWORD_BCRYPTRDER QUELS AUTRES FONCTIONS POUR SECURISER
// DEFAULT EQUIVAUT A BCRYPT

// echo $username, $password, $lastname, $firstname;
$sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("'.$firstname.'","'.$lastname.'","'. $username.'","'.$password.'")';

// echo $sql;
// 3 requete
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));

$_SESSION['message'] = "Utilisateur ". $firstname. " a été ajouté !";
// TODO ADD HERE SERVER MESSAGE

header('Location:'.$_SERVER['HTTP_REFERER']);
// cest quoi les requetes http ????? tcp ????




//PASSWORD DEFAULT ? BCRYPT

// TODO : FAIRE UN CRUD.
// TODO : HANDLE TELECHARGEMENT DE FICHIER AVEC UN FORMULAIRE.
// TODO : ETUDIER LE PDO.
// TODO : FAIRE L'EXERCISE AVEC PDO ET POO -> JEU PHP WARRIORS.
// TODO :
