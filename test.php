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

                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db   = 'wie_is_de_mol';

                    $conn = new mysqli($host, $user, $pass, $db);

                    if ($conn->connect_error) {
                        die("Connectie mislukt: " . $conn->connect_error);
                    }
                ?>
            </form>
        </div>
        
        <h2>Kandidaat: <?php echo $_POST["code"];?></h2>
    </body>
</html>