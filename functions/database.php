<?php
$db = null;
function getConnexion()
{
    $host = 'localhost';
    $dbName = 'bddtest';
    $user = 'root';
    $password = 'root';
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password);
    } catch (PDOException $e) {
        die("Connexion échouée : " . $e->getMessage());
    }

    return $db;
}

$db = getConnexion();
