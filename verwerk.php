<?php
    session_start();
    $_SESSION["anss"][] = $_POST["ans"];
    // print_r($_SESSION["anss"]);
?>
<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <!-- <h1><?php echo $_POST["ans"]; ?></h1> -->
        <?php
            include("config.php");
            // foreach ($_SESSION["anss"] as $ans) {
            //     $sql = "INSERT INTO antwoorden (Antwoorden) VALUES ('{$ans}')";
            //     $conn->query($sql);
            // }

            $ans = implode("CHAR(10)", $_SESSION["anss"]);
            $sql = "INSERT INTO antwoorden (Antwoorden) VALUES ('{$ans}')";
            $conn->query($sql);
            $sql = "INSERT INTO antwoorden (Namen) VALUES ('{$_SESSION['naam']}')";
            $conn->query($sql);
        ?>
    </body>
</html>