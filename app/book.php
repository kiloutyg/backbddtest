<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit();
}
?>
<html>

<head>
    <title>Livre</title>

</head>

<body>
    <?php
    var_dump($_COOKIE);
    var_dump($_POST);
    var_dump($_SESSION) ?>
    <h4>Ajouter un livre</h4>
    <form action="function/addBook.php" method="post">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required>
        <label for="author">Auteur</label>
        <input type="text" name="author" id="author" required>
        <input type="file" name="book" id="book" required>
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>