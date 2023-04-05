<?php

include('database.php');
include('zodiac.php');

$firstName = !empty($_POST) ? $_POST['name'] : null;
$lastName = !empty($_POST) ? $_POST['lastname'] : null;
$password = str_shuffle($firstName) . str_shuffle($lastName);
if (strlen($password) < 12) $password = fillPassword($password);
$birthdate = !empty($_POST) ? $_POST['calendar'] : null;
$zodiac = manageZodiacSign($birthdate);
$complex_password = complexPassword($password);

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
        insert($db, $firstName, $lastName, $password, $birthdate, $zodiac, $complex_password);
        header('location: ../index.php');
    }
}

function fillPassword($password)
{
    $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i = strlen($password); $i <= 12; $i++) {
        $password .= $alph[rand(0, 35)];
    }

    return $password;
}

function complexPassword($password): string
{
    $complexpassword = $password;
    $length = 12;

    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for ($i = strlen($complexpassword); $i < $length; $i++) {
        $complexpassword .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $complexpassword;
}

function insert($db, $firstName, $lastName, $password, $birthdate, $zodiac, $complex_password)
{
    $request_string = "INSERT INTO `users` (`first_name`, `name`, `password`,`date_of_birth`, `astrological_sign`, `complex_password`) VALUES (?, ?, ?, ?, ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$firstName, $lastName, $password, $birthdate, $zodiac, $complex_password]);
}
