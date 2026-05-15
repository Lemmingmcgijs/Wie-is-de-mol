<?php
    session_start();
    $_SESSION["title"] = "Dashboard";

    if ($_SESSION["naam"] == Null) {
        header("Location: login.php");
        exit();
    }

    if (isset($_POST["start_test"])) {
        header("Location: test.php");
            exit();
    }
    if (isset($_POST["eliminatie"])) {
        header("Location: eliminatie.php");
            exit();
    }
    if (isset($_POST["beoordeel"])) {
        header("Location: beoordeel.php");
            exit();
    }
?>
<!DOCTYPE html>
<html class="dashboard">
    <?php
        include("head.php");
    ?>
    <body>
        <?php include("header.php");?>

        <div class="main-content">
            <h1>DASHBOARD</h1>

            <div class="blok">
                <form method="post">
                    <button type="submit" name="start_test">De test</button>
                    <?php if ($_SESSION["naam"] == "Gijs"): ?>
                        <button type="submit" name="eliminatie">Eliminatie</button>
                        <button type="submit" name="beoordeel">Beoordeel</button>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </body>
</html>