<?php
    session_start();
    $_SESSION["title"] = "Eliminatie";

    if ($_SESSION["naam"] != "Gijs") {
        header("Location: dashboard.php");
        exit();
    }

    include("config.php");
    $sql = "SELECT * FROM antwoorden";
    $result = $conn->query($sql);

    $anss_goed = explode("\n", get_column($result, 0)[0]);
    $scores = [];
    foreach (array_slice(get_column($result, 1), 1) as $key=>$naam) {
        $anss = explode("\n", get_column($result, 0)[$key+1]);
        $score = 0;
        foreach ($anss as $key=>$ans) {
            $ans_goed = $anss_goed[$key];
            if ($ans == $ans_goed) {
                $score += 1;
            }
        }
        $scores[$naam] = $score;
    }
    $slechtste = array_search(min($scores), $scores);
    
    if (isset($_POST["naam"])) {
        if ($_POST["naam"] == $slechtste) {
            $scherm = "rood";
        } else {
            $scherm = "groen";
        }
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
            <div class="blok">
                <?php if (!isset($_POST["naam"])): ?>

                <h1>DE ELIMINATIE</h1>
                <form method="post" autocomplete="off">
                    <input name="naam" type="text" placeholder="naam" autofocus>
                    <button type="submit">→</button>
                </form>

                <?php else: {
                    $_SESSION["scherm"] = $scherm;
                    header("Location: scherm.php");
                    exit();
                }?>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>