<?php
    session_start();
    $_SESSION["anss"][] = $_POST["ans"];

    if ($_SESSION["gestuurd"] == TRUE) {
        header("Location: index.php");
        exit();
    }
    $_SESSION["gestuurd"] = TRUE;
?>
<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <?php
            include("config.php");

            $ans = implode("\n", $_SESSION["anss"]);
            $sql = "INSERT INTO antwoorden (Antwoorden, Namen) VALUES ('{$ans}', '{$_SESSION['naam']}')";
            if ($conn->query($sql)) {
                echo "<h1>Gelukt!</h1>";
            } else {
                echo "<h1>Mislukt :(</h1>";
            }
        ?>
    </body>
</html>