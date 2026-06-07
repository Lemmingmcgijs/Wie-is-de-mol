<header>
    <nav>
        <ul>
            <a href="dashboard.php"><li>
                <h2>Dashboard</h2>
            </li></a>

            <h1>Pot: </h1>

            <div class="dropdown">
                <button class="drop-button"><h2><?php if (isset($_SESSION["naam"])) {echo $_SESSION["naam"];} else {echo "Niet ingelogd";}?> ▼</h2></button>
                <div class="drop-content">
                    <a href="<?php if (isset($_SESSION["naam"])) {echo 'loguit.php">Log uit';} else {echo 'login.php">Log in';}?></a>
                </div>
            </div>
        </ul>
    </nav>
</header>