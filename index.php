<!DOCTYPE html>
<html class="index">
    <?php
        include("head.php");
    ?>
    <body>
        <div class="blok">
            <h1>DE TEST</h1>
            <p>VOER UW CIJFERCODE IN</p>
            <form action="test.php" method="post">
                <input name="code" type="text" placeholder="0000" required autofocus maxlength="4">
                <br>
                <button type="submit">IDENTIFICEER</button>
            </form>
        </div>
    </body>
</html>