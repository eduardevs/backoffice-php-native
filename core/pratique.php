<?php

echo date('Y/m/d - H:i:s');
// GET DATA WITH GET AND POST
// secure this data with isset, strtolower etc
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$role = strtolower($_POST['role']);

if (strlen($password) < 8) {
    echo 'this password is too short';
}

$userData = [];

// ? ADD THE ELEMENTS FROM BEGINNING OF ARRAY
array_unshift($userData, $name.' '.$lastname, $password, $role);

// ?  PRINT ARRAY
print_r($userData);

$i = 0;
echo array_key_last($userData);

echo '<br>';

// ? BASIC WHILE PHP LOOP
// while ($i <=  array_key_last($userData)) {
//     echo  $userData[$i].' <br>';
//     $i++;
// }

// ? CLASSIC FOR LOOP
// for ($i = 0; $i <= array_key_last($userData); $i++) {
//     echo $i.' : '. $userData[$i].'<br>';
// }

// ? FOREACH => MORE EFFICIENT LOOP
// foreach ($userData as $value) {
//     echo $value. '<br/>';
// };
// mieux
// associatif array
// ? -- FOREACH TO GET THE KEY WITH VALUE
$userArray = array(
    'name' => $name,
    'lastName' => $lastname,
    'password' => $password,
    'role' => $role
);
foreach ($userArray as $cle => $entree) {
    echo $cle. " est : ". $entree. "<br />";
}

// make a password hash with bscript
if (isset($name) && isset($lastname) && isset($password) && isset($role)) {
    // echo 'Hello '.$name. ' Welcome to the new php page';
} else {
    // echo ' Please complete all the fields !';
}



// connexion a la database mysql
// ? traitement de données
// $age = (int) $_GET['age'];
// cast to number

// ?Verifier si les values existent ?

// echo($age .  ' is the value');
// echo gettype($age);
// if (isset($age) && is_int($age) && $age != false) {
//     echo 'Hello';
//     if ($age >= 18) {
//         echo 'You are a young adult';
//     } elseif ($age < 18) {
//         echo 'You are too young for this !';
//     }
// } else {
//     echo 'your value is not defined or is not a number';
// }



// redirect page
// operateur ternaire
