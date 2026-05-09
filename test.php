<!DOCTYPE html>
<html class="test">
    <?php
        include("head.php");
    ?>
    <body>
        <header>
            <a href="index.php"><img src="assets/logo.jpg"></a>
            <h1>20. Wie is de mol?</h1>
            <h2>Kandidaat: <?php echo $_POST["code"];?></h2>
        </header>

        <form method="post" action="verwerk.php">
            <div class="antwoord">
                <input type="radio" id="ans_1" name="ans" value="1">
                <label for="ans_1">Test1</label>
            </div>
            <div class="antwoord">
                <input type="radio" id="ans_2" name="ans" value="2">
                <label for="ans_2">Test2</label>
            </div>
            <div class="antwoord">
                <input type="radio" id="ans_3" name="ans" value="3">
                <label for="ans_3">Test3</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>