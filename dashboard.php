<?php
    session_start();
    $_SESSION["title"] = "Dashboard";

    if (!isset($_SESSION["naam"])) {
        header("Location: login.php");
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
                <a href="test.php"><button>De test</button></a>
                <?php if ($_SESSION["naam"] == "Gijs"): ?>
                    <a href="eliminatie.php"><button>Eliminatie</button></a>
                    <a href="pot.php"><button>Pot beheer</button></a>
                <?php endif;?>
            </div>

            <?php
                if (isset($_SESSION["gemaakt"])) {
                    if ($_SESSION["gemaakt"]) {
                        echo "<h2>De test is succesvol ingeleverd!</h2>";
                    }
                }
                $_SESSION["gemaakt"] = FALSE;?>
        </div>
    </body>
</html>