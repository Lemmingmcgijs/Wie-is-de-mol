<?php
    session_start();
    if ($_SESSION["naam"] == Null) {
        header("Location: index.php");
        exit();
    }

    $_SESSION["vraag"] +=1;
    $_SESSION["anss"][] = $_POST["ans"];

    include("config.php");
    $sql = "SELECT * FROM vena";
    $result = $conn->query($sql);

    $vena = get_row($result, $_SESSION["vraag"]);
    $anss = array_filter(array_slice($vena, 2));
?>
<!DOCTYPE html>
<html class="test">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="logo"><a href="index.php"><img src="assets/logo.jpg"></a></div>
        
        <div class="blok">
            <h1><?php echo $_SESSION["vraag"]+1 . ". " . $vena["Vraag"];?></h1>

            <form method="post" action="<?php if ($_SESSION["vraag"] > count(get_column($result, 1))-2) { echo "verwerk.php";} else { echo "";}?>">
                <ul>
                    <?php
                        foreach ($anss as $ans) {
                            echo '<li class="antwoord">';
                            echo '<input type="radio" id="ans_1" name="ans" value="' . $ans . '">';
                            echo '<label for="ans_1">' . $ans . '</label>';
                            echo '</li>';
                        }
                    ?>
                    <button type="submit">BEVESTIG KEUZE</button>
                </ul>
            </form>
        </div>
        
        <h2><?php echo "Kandidaat: " . $_SESSION["naam"];?></h2>
    </body>
</html>