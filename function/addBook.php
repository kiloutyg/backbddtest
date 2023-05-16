<?php
include('database.php');

$title = !empty($_POST) ? $_POST['title'] : null;
$author = !empty($_POST) ? $_POST['author'] : null;
$book = !empty($_POST) ? $_POST['book'] : null;
$path = null;


if (!empty($book)) {
}

if ($_POST) {
    if (empty($title)) {
        echo 'Veuillez renseigner le titre du livre';
    } else if (empty($author)) {
        echo 'Veuillez renseigner l\'auteur du livre';
    } else if (empty($book)) {
        echo 'Veuillez renseigner le livre';
    } else {
        insert($db, $title, $author, $path);
        header('location: ../index.php');
    }
}
