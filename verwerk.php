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

    $stmt = $conn->prepare("INSERT INTO antwoorden (Antwoorden, Namen, Tijden) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE Antwoorden = VALUES(Antwoorden), Tijden = VALUES(Tijden)");
    if ($stmt) {
        $stmt->bind_param("sss", $ans, $_SESSION["naam"], $tijd);

        $stmt->execute();
    }

    $_SESSION["vraag"] = 0;
    $_SESSION["anss"] = [];

    $_SESSION["gemaakt"] = TRUE;

    header("Location: dashboard.php");
    exit();
?>