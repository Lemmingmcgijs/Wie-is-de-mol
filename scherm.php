<?php
    session_start();
    $_SESSION["title"] = ucfirst($_SESSION["scherm"]);

    if (!isset($_SESSION["naam"]) || $_SESSION["naam"] != "Gijs") {
        header("Location: dashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<html class="eliminatie-scherm">
    <?php
        include("head.php");
    ?>
    <body>
        <a class="logo" href="dashboard.php"><img src="assets/logo.jpg"></a>

        <div class="main-content">
            <a href="eliminatie.php" class="achtergrond"><img src="assets/<?php echo $_SESSION["scherm"];?>.jpg"></a>
            <audio controls autoplay>
                <source src="assets/scherm.mp3" type="audio/mpeg">
            </audio>
        </div>
    </body>
</html>