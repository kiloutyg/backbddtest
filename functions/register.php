<?php

include('database.php');
include('zodiac.php');

$firstName = !empty($_POST) ? $_POST['name'] : null;
$lastName = !empty($_POST) ? $_POST['lastname'] : null;
$password = !empty($_POST) ? $_POST['password'] : null;
$birthdate = !empty($_POST) ? $_POST['calendar'] : null;
$zodiac = manageZodiacSign($birthdate);

if ($_POST) {
    if (empty($lastName)) {
        echo 'Veuillez renseigner votre nom';
    } else if (empty($firstName)) {
        echo 'Veuillez renseigner votre prénom';
    } else if (empty($password)) {
        echo 'Veuillez renseigner votre mot de passe';
    } else {
        insert($db, $firstName, $lastName, $password, $birthdate, $zodiac);
        header('location: ../index.php');
    }
}

function insert($db, $firstName, $lastName, $password, $birthdate, $zodiac)
{
    $request_string = "INSERT INTO `users` (`first_name`, `name`, `password`,`date_of_birth`, `astrological_sign`) VALUES (?, ?, ?, ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$firstName, $lastName, $password, $birthdate, $zodiac]);
}
