<?php
$db = null;
function getConnexion()
{
    $host = 'database';
    $dbName = 'bddtest';
    $user = 'testuser';
    $password = 'testpass';
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password);
    } catch (PDOException $e) {
        die("Connexion échouée : " . $e->getMessage());
    }

    return $db;
}

$db = getConnexion();
