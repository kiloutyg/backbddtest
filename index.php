<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>

<body>
    <h1 style="color:gold">PIZZA</h1>

    <form action="function/login.php" method="post">
        <label for="login">Nom d'utilisateur</label>
        <input type="text" name="login" id="login" required>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Se connecter">
    </form>

    <br>
    <form action="function/register.php" method="post">
        <label for="login">Nom d'utilisateur</label>
        <input type="text" name="login" id="login" required>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="S'enregistrer">
    </form>
    <br>
    <br>
    <?php
    include('function/retrieveUsers.php');
    // init the table with user's tasks
    $results = find_users($db);
    ?>
    <table>
        <tr>
            <th>login</th>
            <th>Mot de passe</th>

        </tr>
        <?php
        // get the values from the existing tasks
        foreach ($results as $value) {
        ?>
            <tr style="text-align:center">
                <td><?= $value["login"]; ?></td>
                <td><?= $value["password"]; ?></td>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>