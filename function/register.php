<?php

include('database.php');

$login = !empty($_POST) ? $_POST['login'] : null;
$password =  !empty($_POST) ? $_POST['password'] : null;
$hashed = hashPassword($password);
$logindb = "SELECT * FROM users WHERE login = '$login'";




function hashPassword($password)
{
    $hashed = password_hash($password, PASSWORD_BCRYPT);

    return $hashed;
}

if ($_POST) {

    if (preg_match('~[0-9]+~', $login)) {
        echo 'Veuillez retirer les nombres de votre login';
    } else if ($login === $logindb) {
        echo 'Ce login existe déjà';
    } else if (empty($login)) {
        echo 'Veuillez renseigner votre login';
    } else {
        insert($db, $login, $hashed);
        header('location: ../index.php');
    }
}

$password = $hashed;

function insert($db, $login, $password)
{

    $request_string = "INSERT INTO `users` (`login`, `password`) VALUES ( ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$login, $password]);
}
