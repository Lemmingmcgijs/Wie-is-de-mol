<?php
    session_start();
    if (!isset($_SESSION["naam"])) {
        header("Location: login.php");
        exit();
    }

    if (!isset($_POST["ans"])) {
        header("Location: dashboard.php");
        exit();
    }

    $_SESSION["anss"][] = $_POST["ans"];

    include("config.php");

    $ans = implode("\n", $_SESSION["anss"]);
    $tijd = time()-$_SESSION["tijd"];

    $stmt = $conn->prepare("UPDATE Gegevens SET Antwoorden = ?, Tijden = ? WHERE Namen = ?");
    if ($stmt) {
        $stmt->bind_param("sis", $ans, $tijd, $_SESSION["naam"]);

        $stmt->execute();
    }

    $_SESSION["vraag"] = 0;
    $_SESSION["anss"] = [];

    $_SESSION["gemaakt"] = TRUE;

    header("Location: dashboard.php");
    exit();
?>