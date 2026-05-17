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
    $stmt = $conn->prepare("INSERT INTO antwoorden (Antwoorden, Namen) VALUES (?, ?) ON DUPLICATE KEY UPDATE Antwoorden = VALUES(Antwoorden)");
    if ($stmt) {
        $stmt->bind_param("ss", $ans, $_SESSION['naam']);

        $stmt->execute();
    }

    $_SESSION["vraag"] = 0;
    $_SESSION["anss"] = [];

    header("Location: dashboard.php");
    exit();
?>