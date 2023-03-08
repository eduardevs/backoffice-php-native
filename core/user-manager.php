<?php

session_start();

if (isset($_POST['dispatch'])) {
    $action = $_POST['dispatch'];
} elseif (isset($_GET['dispatch'])) {
    $action = $_GET['dispatch'];
}

switch($action) {
    case 'log-admin':
        logAdmin();
        break;
    case 'read-users' :
        fetchUsers();
        break;
    default:
        echo 'not valid action !';
}

// function fetchUsers()
// {


// }

function logAdmin()
{
    require('./connexion.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username= $_POST['username'];
        $password=$_POST['password'];

        $sql = 'SELECT * FROM users WHERE username="'.$_POST['username'].'"';
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));

        // get user info in an associative array mysqli_fetch_assoc
        if (mysqli_num_rows($req)>0) {
            $user = mysqli_fetch_assoc($req);
            if (password_verify(trim($_POST['password']), $user['password'])) {
                // for test
                // $user['user'] = 'admin';
                // if($user['role'] =="user") {
            //     $_SESSION['error'] = 'Vous n\'êtes pas autorisé !';
            //     header('Location:'.$_SERVER['HTTP_REFERER']);
                // } else {
                // var_dump($user);
                // die();
                $_SESSION['firstname'] = $user['firstname'];

                $_SESSION['msg'] = "Bienvenuuuuuuuu ".$user['firstname']." ".$user['lastname'];
                // ! error : COOKIE WIP -> not working by now
                setcookie('user', $user['firstname'], time()+3600, '/');
                // var_dump($_COOKIE);
                // die();
                header('Location:../dashboard.php');
                // }
            }
        } else {
            $_SESSION['error'] = 'Oops veuillez vous enregistrer !';
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }
}

// select from users
// alter table add column role
// setcookie
