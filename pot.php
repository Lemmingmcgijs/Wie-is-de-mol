<?php
    session_start();
    $_SESSION["title"] = "Pot beheer";

    if (!isset($_SESSION["naam"]) || $_SESSION["naam"] != "Gijs") {
        header("Location: dashboard.php");
        exit();
    }

    // update met $_POST["bedrag"];
?>
<!DOCTYPE html>
<html class="pot">
    <?php
        include("head.php");
    ?>
    <body>
        <?php include("header.php");?>

        <div class="main-content">
            <h1>POT BEHEER</h1>

            <div class="blok">
                <h2>Wijzig de pot:</h2>
                <form method="post">
                    <input type="text" name="bedrag">
                    <button type="submit">Wijzig</button>
                </form>
            </div>
        </div>
    </body>
</html>