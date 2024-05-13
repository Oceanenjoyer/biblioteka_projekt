<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="navbar__links">
                <a class="navbar__links--home" href="#">Home</a>
                <input type="search" placeholder="Wyszukaj..." />
                <div class="navbar__links--buttons">
                    <a href="#">About</a>
                    <a href="#">Products</a>
                    <a href="#">Blog</a>
                    <?php
                    session_start();
                    if(isset($_SESSION['user_id'])) {
                        echo '<a href="logout.php">Wyloguj sie</a>';
                    }else {
                        
                        echo '<a href="login.php">Zaloguj sie</a>';
                    }
                    ?>
                    
                </div>
            </div>
        </div>

        <?php

        if(isset($_SESSION['user_id'])) {
            echo $_SESSION['user_id'];
            echo ". Zalogowano jako " . $_SESSION['user_name'];
        } else {
            echo "Niezalogowano";
        }
        ?>
    </div>
</body>

</html>