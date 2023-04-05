<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="astrostyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdd test</title>
    </title>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>

<body>
    <form id="registration" action="functions/register.php" method='post'>
        <div id="register-form">
            <h2>S'inscrire</h2>
            <div class="connect">
                <label for="name">Prénom</label>
                <input id="register-name" type="text" name="name" placeholder="Prénom">
            </div>
            <div class="connect">
                <label for="lastname">Nom de famille</label>
                <input id="register-lastname" type="text" name="lastname" placeholder="Nom">
            </div>
            <div>
                <label for="calendar">Date de naissance</label>
                <input type="date" name="calendar" value="2023-04-05" />
            </div>
            <button type="submit">Inscription</button>
        </div>
    </form>

    <?php
    include('functions/retrieveUsers.php');
    // init the table with user's tasks
    $results = find_users($db);
    ?>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Mot de passe</th>
            <th>Signe astrologique</th>
            <th>Date de naissance</th>
        </tr>
        <?php
        // get the values from the existing tasks
        foreach ($results as $value) {
        ?>
            <tr style="text-align:center">
                <td><?= $value["name"]; ?></td>
                <td><?= $value["first_name"]; ?></td>
                <td><?= $value["password"]; ?></td>
                <td><?= $value["astrological_sign"]; ?></td>
                <td><?= $value["date_of_birth"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <style>
        <<<<<<< HEAD #particles-js {
            --particle-background: #ccc;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: var(--particle-background);
            background-image: url("");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        =======#particles-js {
            --particle-background: #ccc;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: var(--particle-background);
            background-image: url("");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        >>>>>>>origin/main
    </style>


</body>