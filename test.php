<?php
    session_start();
    if ($_SESSION["naam"] == Null) {
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html class="test">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="logo"><a href="index.php"><img src="assets/logo.jpg"></a></div>
        
        <div class="blok">
            <h1>20. Wie is de mol?</h1>

            <form method="post" action="verwerk.php">
                <ul>
                    <li class="antwoord">
                        <input type="radio" id="ans_1" name="ans" value="1">
                        <label for="ans_1">Test1</label>
                    </li>
                    <li class="antwoord">
                        <input type="radio" id="ans_2" name="ans" value="2">
                        <label for="ans_2">Test2</label>
                    </li>
                    <li class="antwoord">
                        <input type="radio" id="ans_3" name="ans" value="3">
                        <label for="ans_3">Test3</label>
                    </li>
                    <button type="submit">BEVESTIG KEUZE</button>
                </ul>
            </form>
        </div>
        
        <h2><?php echo "Kandidaat: " . $_SESSION["naam"];?></h2>
    </body>
</html>