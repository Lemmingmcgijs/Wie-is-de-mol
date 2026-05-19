<?php
    header("Location: login.php");
    exit();
?>
<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <?php include("header.php");?>

        <div class="main-content">
            <div class="blok">
                <h1><?php if (isset($_SESSION["naam"])) {echo "Je bent ingelogd!";} else {echo "Je moet inloggen";}?></h1>
            </div>
        </div>
    </body>
</html>