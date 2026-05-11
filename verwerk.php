<!DOCTYPE html>
<html class="index">
    <?php

use PSpell\Config;

        include("head.php");
    ?>
    <body>
        <h1><?php echo $_POST["ans"]; ?></h1>
        <?php
            include("config.php");
            $sql = "INSERT INTO Antwoorden (Antwoorden) VALUES ('{$_POST['ans']}')";
            if ($conn->query($sql) === TRUE) {
            echo "Antwoord opgeslagen!";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        ?>
    </body>
</html>