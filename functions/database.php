<?php
$db = null;
function getConnexion()
{
    $host = 'database';
    $dbName = 'bddtest';
<<<<<<< HEAD
    $user = 'root';
    $password = 'root';
=======
    $user = 'testuser';
    $password = 'testpass';
>>>>>>> 5929806ef84287a98e7f1652f0364312666fd780
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password);
    } catch (PDOException $e) {
        die("Connexion échouée : " . $e->getMessage());
    }

    return $db;
}

$db = getConnexion();
