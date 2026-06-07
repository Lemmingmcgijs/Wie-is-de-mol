<?php
    session_start();
    $_SESSION["title"] = "Login";

    if (isset($_SESSION["naam"])) {
        header("Location: dashboard.php");
        exit();
    }

    include("config.php");

    $sql = "SELECT Namen, Codes FROM Gegevens";
    $result = $conn->query($sql);
    $codes = get_column($result, 1);
    $names = get_column($result, 0);

    $melding = "&nbsp";

    if (isset($_POST["code"])) {
        if (in_array($_POST["code"], $codes)) {
            $_SESSION["naam"] = $names[array_search($_POST["code"], $codes)];
            $_SESSION["vraag"] = 0;
            $_SESSION["anss"] = [];

            header("Location: dashboard.php");
            exit();
        }
        else {
            $melding = "Foute code!";
        }
    }
?>
<!DOCTYPE html>
<html class="login">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="main-content">
            <div class="blok">
                <h1>DE TEST</h1>
                <p>VOER UW CIJFERCODE IN</p>
                <form method="post" autocomplete="off">
                    <input name="code" type="text" placeholder="0000" required autofocus maxlength="4">
                    <br>
                    <button type="submit">IDENTIFICEER</button>
                </form>
                <p class="melding"><?php echo $melding;?></p>
            </div>
        </div>
    </body>
</html>