<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <div  class="container">
        <?php
        if (isset($_SESSION['error'])) {
            ?>
            <div class="bg-warning"><?php echo $_SESSION['error']?></div>
            <?php
            unset($_SESSION['error']);
        }
    ?>
        <form method="POST" action="./core/user-manager.php">
            <input type="hidden" name="dispatch" value="log-admin"/>
            <label for="user">Identifiant :</label>
            <input type="text" id="user" name="username" required> </input>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required></input>
            <input type="submit" value="login"/>
        </form>
    </div>
</body>
</html>