<?php
    session_start();
    $_SESSION["naam"] = Null;

    include("config.php");

    $sql = "SELECT * FROM inlog";
    $result = $conn->query($sql);
    $codes = get_column($result, 0);
    $names = get_column($result, 1);

    $melding = "&nbsp";

    if ($_POST["code"] != Null) {
        if (in_array($_POST["code"], $codes)) {
            $_SESSION["naam"] = $names[array_search($_POST["code"], $codes)];
            $_SESSION["vraag"] = -1;
            $_SESSION["anss"] = [];
            $_SESSION["gestuurd"] = FALSE;

            header("Location: test.php");
            exit();
        }
        else {
            $melding = "Foute code!";
        }
    }
?>
<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="blok">
            <h1>DE TEST</h1>
            <p>VOER UW CIJFERCODE IN</p>
            <form method="post" autocomplete="off">
                <input name="code" type="text" placeholder="0000" required autofocus maxlength="4">
                <br>
                <button type="submit">IDENTIFICEER</button>
            </form>
            <p class="melding"><?php echo $melding;?><p>
        </div>
    </body>
</html>