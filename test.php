<?php
    session_start();
    $_SESSION["title"] = "De test";

    if (!isset($_SESSION["naam"])) {
        header("Location: login.php");
        exit();
    }

    if ($_SESSION["vraag"] == 0) {
        $_SESSION["tijd"] = time();
    }

    if (isset($_POST["ans"])) {
        $_SESSION["anss"][] = $_POST["ans"];
        $_SESSION["vraag"] +=1;

        header("Location: test.php");
        exit();
    }

    include("config.php");
    $sql = "SELECT * FROM vena";
    $result = $conn->query($sql);

    if ($_SESSION["vraag"] >= count(get_column($result, 1))) {
        header("Location: dashboard.php");
        exit();
    }

    $vena = get_row($result, $_SESSION["vraag"]);
    $anss = array_filter(array_slice($vena, 2));
?>
<!DOCTYPE html>
<html class="test">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="main-content">
            <div class="logo"><a href="dashboard.php"><img src="assets/logo.jpg"></a></div>
            
            <div class="blok">
                <h1><?php echo $_SESSION["vraag"]+1 . ". " . $vena["Vraag"];?></h1>

                <form method="post" action="<?php if ($_SESSION["vraag"] > count(get_column($result, 1))-2) { echo "verwerk.php";} else { echo "";}?>">
                    <ul>
                        <?php
                            $i = 1;
                            foreach ($anss as $ans) {

                                echo '<li class="antwoord">';
                                echo '<input type="radio" id="ans_' . $i . '" name="ans" value="' . $ans . '" required>';
                                echo '<label for="ans_' . $i . '">' . $ans . '</label>';
                                echo '</li>';

                                $i += 1;
                            }
                        ?>
                    </ul>
                    <ul class="button">
                        <button type="submit">BEVESTIG KEUZE</button>
                    </ul>
                </form>
            </div>
            
            <h2><?php echo "Kandidaat: " . $_SESSION["naam"];?></h2>
        </div>
    </body>
</html>
<!-- ' . ($i > 4) ? ' kolom' : '' . ' -->