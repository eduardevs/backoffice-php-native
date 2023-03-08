<?php

// $id = $_GET['id'];
// var_dump($id);
// echo 'this is the id :' . $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gèrer utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h1>Utilisateurs</h1>
</div>
<table>

    <thead>
        <tr>
        <th>Id</th>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Username</th>

        <th>Actions</th>
    </tr>
</thead>
<tbody>
<?php
 require('./core/connexion.php');

$sql = 'SELECT id, username, firstname, lastname FROM users';
$req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));

while ($user = mysqli_fetch_array($req)) {
    ?>
    <tr>
        <td><?= $user['id']?></td>
        <td><?= $user['firstname']?></td>
        <td><?= $user['lastname']?></td>
        <td><?= $user['username']?></td>
        <td>
                    <!-- TODO : A FAIRE UPDATE-->

            <a href="./update-user.php?id=<?php echo $user['id']; ?>" class="btn btn-warning ml-2">
            Modifier
        </a>
        <!-- TODO : A FAIRE DELETE -->
        <a href="./delete-user.php?id=<?php echo $user['id']; ?>" class="btn btn-warning ml-2">Delete</a>

        </td>
    </tr>
    <?php
};
?>
</tbody>

</table>

</div>

</body>

</html>

