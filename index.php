<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <?php include("header.php");?>

        <div class="main-content">
            <div class="blok">
                <h1>Je moet inloggen</h1>
            </div>
        </div>

        <?php
            header("Location: login.php");
            exit();
        ?>
    </body>
</html>