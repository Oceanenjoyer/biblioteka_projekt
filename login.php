<?php 
require_once "modules/login/login_view.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Strona logowania</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="main">
    <form class="login" action="modules/login/login_mvc.php" method="post">

        <div class="login__nav">
            <a href="index.php"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a>
        </div>

        <div class="login__sign">
            <h1>Zaloguj się</h1>
        </div>

        <div class="login__input">
            <input type="text" name="login_username" placeholder="Nazwa Użytkownika..."/>

            <input type="password" name="login_password" placeholder="Hasło..."/>
        </div>

        <div class="login__options">
            <input type="checkbox" name="rememberme"/>
            <label>Zapamiętaj mnie</label>
        </div>

        <?php
        checkLoginErrors();
        ?>



        <div class="login__submit">
            <button type="submit">Zaloguj się</button>
        </div>

        <div class="login__footer">
            Nie masz konta <a href="signup.php">Zarejestruj się</a>
        </div>

    </form>
</body>

</html>