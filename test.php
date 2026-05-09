<!DOCTYPE html>
<html class="test">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="container">
            <a href="index.php"><img src="assets/logo.jpg"></a>
            <h1>20. Wie is de mol?</h1>
        </div>

        <form>
            <div class="container">
                <input type="radio" id="ans_1" name="ans_1">
                <label for="ans_1">Test1</label>
            </div>
            <div class="container">
                <input type="radio" id="ans_2" name="ans_1">
                <label for="ans_2">Test2</label>
            </div>
            <div class="container">
                <input type="radio" id="ans_3" name="ans_1">
                <label for="ans_3">Test3</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>