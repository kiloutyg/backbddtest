<?php
include('database.php');

$title = !empty($_POST) ? $_POST['title'] : null;
$author = !empty($_POST) ? $_POST['author'] : null;
$path = null;
$uploaddir = '../doc/';

if (!empty($book)) {
    $path = $uploaddir . $_FILES['book'];
    echo '<pre>';
    if (move_uploaded_file($_FILES['book']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }

    echo 'Here is some more debugging info:';
    print_r($_FILES);

    print "</pre>";
    return $path;
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

function insert($db, $title, $author, $path)
{

    $request_string = "INSERT INTO `books` (`title`, `author`, `path`) VALUES ( ?, ?, ?)";
    $request = $db->prepare($request_string);
    $request->execute([$title, $author, $path]);
}
