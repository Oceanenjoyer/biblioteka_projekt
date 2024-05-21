<?php
session_start();
if ($_SESSION['user_admin'] == 0) {
    header("Location: index.php");
    die();
}

require_once 'modules/database.php';
require_once 'modules/adminpanel/adminpanel_model.php';
require_once 'modules/adminpanel/adminpanel_contr.php';
require_once 'modules/adminpanel/adminpanel_view.php';
require_once 'modules/views.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administratora</title>
    <link rel="stylesheet" href="css/adminpanel.css">
    <script src="scripts.js"></script>
</head>

<body>
    <div class="main">

        <?php
        viewAdmin();
        deleteUser($db);
        deleteBook($db);
        gotoBook();
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];

            switch ($currentPage) {
                case 'users':
                    showAllUsersTable(getAllUsers($db));
                    break;
                case 'books':
                    showBookTools();
                    showAllBooksTable(getAllBooks($db));
                    break;
                case 'main':
                    break;
                case 'default':
                    break;
            }
        } else {
            echo "<p>Strona nie istnieje</p>";
        }


        ?>



    </div>
</body>

</html>