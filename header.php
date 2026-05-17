<?php session_start();?>
<header>
    <nav>
        <ul>
            <!-- <li>
                <a>Bla1</a>
            </li>
            <li>
                <a>Bla2</a>
            </li>
            <li>
                <a>Bla3</a>
            </li> -->

            <div class="dropdown">
                <button class="drop-button"><h2><?php if (isset($_SESSION["naam"])) {echo $_SESSION["naam"];} else {echo "Niet ingelogd";}?> ▼</h2></button>
                <div class="drop-content">
                    <a href="<?php if (isset($_SESSION["naam"])) {echo 'loguit.php">Log uit';} else {echo 'login.php">Log in';}?></a>
                </div>
            </div>
        </ul>
    </nav>
</header>