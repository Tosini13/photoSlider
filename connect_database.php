<?php

$dsn = "mysql:host=localhost;dbname=photo_slider;port=3307";
$user = "root";
$password = "";

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $ex) {
    $info=$ex->getMessage();
    header("Location: error.php/?err=$info");
    die();
}
?>