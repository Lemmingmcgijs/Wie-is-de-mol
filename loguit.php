<?php
    session_start();

    $_SESSION["naam"] = Null;

    $_SESSION["gemaakt"] = FALSE;

    header("Location: login.php");
    exit();
?>