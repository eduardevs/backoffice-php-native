<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <h1>Créer utilisateur</h1>

        <?php
        if (isset($_SESSION['message'])) {
            echo "<div>".$_SESSION['message']."</div>";
            unset($_SESSION['message']);
        }
?>

            <!-- add images -->
            <!-- add here img -->
        <form method="post" action="./core/add-user.php">
            <label id="name">first name :</label>
            <input type="text" name="firstname" id="name">
            <br>
            <label id="lastname">last name :</label>
            <input type="text" name="lastname" id="lastname">
            <br>
            <label id="username">username :</label>
            <input type="text" name="username" id="username">
            <br>
            <label id="password">Password :</label>
            <input type="password" name="password" id="password">
            <br>
            <!-- level 2 add this to database -->
            <!-- <label id="role">Role :</label>
            <select name="role" id="role" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select> -->
            <br>
            <input class="btn btn-primary" type="submit" value="Créer" />
        </form>

    </div>
</body>
</html>