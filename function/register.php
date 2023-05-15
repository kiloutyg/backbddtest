<?php

include('databse.php');

$login = !empty($_POST) ? $_POST['login'] : null;
$password =  !empty($_POST) ? $_POST['password'] : null;


if ($_POST) {

    if (preg_match('~[0-9]+~', $login)) {
        echo 'Veuillez retirer les nombres de votre login';
    } else if (empty($login)) {
        echo 'Veuillez renseigner votre login';
    } else {
        insert($db, $login, $password);
        header('location: ../index.php');
    }
}




function insert($db, $login, $password)
{
    $request_string = "INSERT INTO `users` (`login`, `password`) VALUES ( ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$login, $password]);
}