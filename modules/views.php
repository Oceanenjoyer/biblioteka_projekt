<?php

function viewStandard()
{
    echo '
    <div class="navbar">
        <div class="navbar__links">
            <a class="navbar__links--home" href="index.php"><img src="images/logo.png" style="width: 250px; height: 60px"></a>
            <form method="GET" action="search.php">
                <input type="search" name="search" placeholder="Wyszukaj...">
                <input type="submit" value="Wyszukaj">
            </form>
            <div class="navbar__links--buttons">';

    session_start();
    if (isset($_SESSION['user_admin'])) {
        echo '<a href="adminpanel.php?page=main">Panel Administratora</a>';
    }

    if (isset($_SESSION['user_id'])) {
        echo '<a href="logout.php">Wyloguj sie</a>';
    } else {
        echo '<a href="login.php">Zaloguj sie</a>';
    }

    echo '
            </div>
        </div>
    </div>';
}

function viewAdmin()
{
    echo '
    <div class="navbar">
    <div class="navbar__links">
        <a class="navbar__links--home" href="index.php"><img src="images/logo.png" style="width: 250px; height: 60px"></a>
        <div class="navbar__links--buttons">
            <a href="adminpanel.php?page=main">Główna</a>
            <a href="adminpanel.php?page=users">Użytkownicy</a>
            <a href="adminpanel.php?page=books">Książki</a>
        </div>
    </div>
</div>
    ';
}
