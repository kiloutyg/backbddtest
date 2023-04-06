<?php

include('database.php');
include('zodiac.php');

$firstName = !empty($_POST) ? $_POST['name'] : null;
$lastName = !empty($_POST) ? $_POST['lastname'] : null;
$password = $firstName . $lastName;
$password = fillPassword($password);
$birthdate = !empty($_POST) ? $_POST['calendar'] : null;
$zodiac = manageZodiacSign($birthdate);

if ($_POST) {
    if (empty($lastName)) {
        echo 'Veuillez renseigner votre nom';
    } else if (preg_match('~[0-9]+~', $lastName)) {
        echo 'Veuillez retirer les nombres de votre nom de famille';
    } else if (preg_match('~[0-9]+~', $firstName)) {
        echo 'Veuillez retirer les nombres de votre prénom';
    } else if (empty($firstName)) {
        echo 'Veuillez renseigner votre prénom';
    } else {
        insert($db, $firstName, $lastName, $password, $birthdate, $zodiac);
        header('location: ../index.php');
    }
}

function fillPassword($password)
{
    $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if (strlen($password) >= 12) {
        $password = str_shuffle($password);
    } else {
        for ($i = strlen($password); $i < 12; $i++) {
            $password .= $alph[rand(0, 35)];
        }
    }
    return $password;
}

function insert($db, $firstName, $lastName, $password, $birthdate, $zodiac)
{
    $request_string = "INSERT INTO `users` (`first_name`, `name`, `password`,`date_of_birth`, `astrological_sign`) VALUES (?, ?, ?, ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$firstName, $lastName, $password, $birthdate, $zodiac]);
}
