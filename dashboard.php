<?php
session_start();
// RECUPERER L'ID
// une fois la login page creer et la gestion de users, faire les sessions et cookies
$id = rand(1, 100);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <?php
    if ($_SESSION["firstname"] === "notest") {
        // TODO test, normalement ajouter ici role si correspond a admin ou user
        // $_SESSION['msg'] = "Bien essayé petit malin mais c'est réservé aux superadmins";
        header('Location:index.php');
    }?>
    <div class="container">
        <h1>DASHBOARD CRUD</h1>
        <div class="row">

            <?php
            if (isset($_SESSION['msg'])) {
                ?>
                <div class="bg-secondary"><?php echo $_SESSION['msg']?></div>
                <?php
                unset($_SESSION['msg']);
            }
?>
            </div>
         <a class="btn btn-primary" href='create-user.php'>Créer utilisateur</a>       
         <a class="btn btn-primary" href='manage-users.php'>Gérer utilisateurs</a>
            <br/>
         <?php
if (isset($_COOKIE['user'])) {
    echo $_COOKIE['user'];
} else {
    echo 'no cookie set!';
    print_r($_COOKIE);
}

?>

    </div>
    <!-- FORM get -->
    <!-- <form action=" ./form.php" method="get">
            <label id="age">age:</label>
            <input id="age" type="text" value="" name="age">
            </input>
            <input type="submit" value="Validate age" />
            </form> -->


</body>

</html>