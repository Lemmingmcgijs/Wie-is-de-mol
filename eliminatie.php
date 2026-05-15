<?php
    session_start();
    $_SESSION["title"] = "Eliminatie";
    if ($_SESSION["naam"] != "Gijs") {
        header("Location: dashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<html class="eliminatie">
    <?php
        include("head.php");
    ?>
    <body>
        <a class="logo" href="dashboard.php"><img src="assets/logo.jpg"></a>

        <div class="main-content">
            <div class="blok">
                <h1>DE ELIMINATIE</h1>
                <form method="post" autocomplete="off">
                    <input name="naam" type="text" placeholder="naam" required autofocus>
                    <button type="submit">→</button>
                </form>
            </div>
        </div>
    </body>
</html>