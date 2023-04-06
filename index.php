<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="astrostyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdd test</title>
    </title>

    <div id="elements-container">
        <!-- Generate 500 stars -->
        <?php
        for ($i = 0; $i < 500; $i++) {
            // Randomly position the star
            $x = rand(0, 100);
            $y = rand(0, 100);

            // Randomly delay the star's animation
            $delay = rand(0, 60) / 10;

            // Output the star element with inline style
            echo "<div class='star' style='left: $x%; top: $y%; animation-delay: $delay" . "s'></div>";
        }
        ?>
    </div>
 </head>

<body onload="movingRock()">
    <form id="registration" action="functions/register.php" method='post'>
        <div id="register-form">
            <h2 class="animated-text">S'inscrire</h2>
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
</body>
<footer>
    <a onclick="RRRRRh()">&#x1FAA8; </a>
</footer>

<script>
function RRRRRh() {
  var elements = document.querySelectorAll('table td:first-child');

  for (var i = 0; i < elements.length; i++) {
    elements[i].innerHTML = "Pierre";
  }
}

function movingRock() {
    var element = document.querySelector('footer a');

    // Génère une position de destination aléatoire sur la page
    var destX = Math.floor(Math.random() * (window.innerWidth - element.offsetWidth));
    var destY = Math.floor(Math.random() * (window.innerHeight - element.offsetHeight));

    // Anime la transition de l'élément vers la position de destination
    element.style.position = 'absolute';
    element.style.left = destX + 'px';
    element.style.top = destY + 'px';
}

</script>