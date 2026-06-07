<?php
    header("Location: login.php");
    exit();

    session_start();
    $_SESSION["title"] = "Wie is de mol?";
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
                <br>
                <h2>To do: 
                    Statestieken(Geld in de pot, anntal gemaakte testen), 
                    Inventaris(Jokers & vrijstellingen) kunnen inzetten, 
                    De pot beheren, 
                    Via de site vragen en antwoorden beheren, 
                    Klikgeluid bij antwoord selecteren, 
                    Beter font(Orbitron of Share Tech Mono</h2>
            </div>
        </div>
    </body>
</html>