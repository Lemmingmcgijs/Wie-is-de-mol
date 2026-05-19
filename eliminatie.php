<?php
    session_start();
    $_SESSION["title"] = "Eliminatie";

    if (!isset($_SESSION["naam"]) || $_SESSION["naam"] != "Gijs") {
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
        $tijd = get_column($result, 2)[$key+1];
        $score = 0;
        foreach ($anss as $key=>$ans) {
            $ans_goed = $anss_goed[$key];
            if ($ans == $ans_goed) {
                $score += 1;
            }
        }
        $scores[$naam] = [
            "score" => $score,
            "tijd" => $tijd
        ];
    }

    uasort($scores, function ($a, $b) {
        $score_comp = $b['score'] <=> $a['score'];
        if ($score_comp !== 0) {
            return $score_comp;
        }
        return $a['tijd'] <=> $b['tijd'];
    });

    end($scores);
    $slechtste = key($scores);
    
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