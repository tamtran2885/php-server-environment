<?php
    // require_once(__DIR__ . "/../config/app.php");
    session_start();

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    echo $username . " " . $password;

    $usernameDB = "tamtran";
    $passwordDB = "123456";

    if (isset($_POST["password"], $_POST["username"])) {
        if($_SESSION["username"] === $usernameDB && $_SESSION["password"] === $passwordDB) {
            $_SESSION["message"] = "Thanks you for telling us your name!";
            header("Location: ../pages/panel.php");
            exit;
        }
    }
?>