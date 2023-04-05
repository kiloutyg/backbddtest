<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdd test</title>
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <form id="registration" action="functions/register.php" method='post'>
        <div id="register-form">
            <h2>S'inscrire</h2>
            <div class="connect">
                <label for="lastname">Nom de famille</label>
                <input id="register-lastname" type="text" name="lastname" placeholder="Nom">
            </div>
            <div class="connect">
                <label for="name">Prénom</label>
                <input id="register-name" type="text" name="name" placeholder="Prénom">
            </div>
            <div>
                <label for="calendar">Date de naissance</label>
                <input type="date" name="calendar" value="2023-04-05" />
            </div>
            <button type="submit">Inscription</button>
        </div>
    </form>

</body>