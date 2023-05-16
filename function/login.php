<?php

include('database.php');

$login = !empty($_POST) ? $_POST['login'] : null;
$password = !empty($_POST) ? $_POST['password'] : null;

if ($_POST) {
    if (empty($login)) {
        echo 'Veuillez renseigner votre login';
    } else if (empty($password)) {
        echo 'Veuillez renseigner votre mot de passe';
    } else {
        // Prepare and execute query
        $request_string = "SELECT * FROM users WHERE login = ?";
        $stmt = $db->prepare($request_string);
        $stmt->execute([$login]);
        $user = $stmt->fetch();

        // Verify password
        if ($user && password_verify($password, $user['password'])) {
            header('location: ../app/book.php');
            echo 'Vous êtes connecté FDP';
        } else {
            echo 'Login ou mot de passe incorrect';
        }
    }
}
