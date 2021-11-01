<?php
    session_start();

    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

    $emailDB = "example@gmail.com";
    $passwordDB = "123456";

    if (isset($_POST["password"], $_POST["email"])) {
        if($_SESSION["email"] === $emailDB && $_SESSION["password"] === $passwordDB) {
            $_SESSION["message"] = "Thanks you for telling us your name!";
            header("Location: ../pages/panel.php");
            exit;
        } else {
            header("Location: ../index.php");
            exit;
        }
    }
?>