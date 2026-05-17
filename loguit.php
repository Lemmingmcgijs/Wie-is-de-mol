<?php
    session_start();

    $_SESSION["naam"] = Null;

    header("Location: login.php");
    exit();
?>