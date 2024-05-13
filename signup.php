<?php
require_once "modules/signup/signup_view.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Strona rejestrowania</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="main">
    <form class="login" action="modules/signup/signup_mvc.php" method="post">

        <a href="index.php"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg></a>

        <div class="login__sign">
            <h1>Zarejestruj się</h1>
        </div>

        <div class="login__input">
            <input type="text" name="register_username" placeholder="Nazwa Użytkownika..." />

            <input type="text" name="register_email" placeholder="Email..." />

            <input type="password" name="register_password" placeholder="Hasło..." />

            <input type="password" name="register_passwordrepeat" placeholder="Potwierdź Hasło..." />
        </div>

        <?php
        checkSignUpErrors();
        ?>

        <div class="login__submit">
            <button type="submit">Zarejestruj się</button>
        </div>

        <div class="login__footer">
            Masz już konto? <a href="login.php">Zaloguj się</a>
        </div>

    </form>

</body>

</html>