<?php
require_once 'modules/database.php';
require_once 'modules/book/book_model.php';
require_once 'modules/book/book_contr.php';
require_once 'modules/book/book_view.php';
require_once 'modules/views.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/book.css">
</head>

<body>
    <?php viewStandard(); ?>
    <div class="book">
        <?php
        if (isset($_GET['name']) && isset($_GET['author'])) {

            $name = $_GET['name'];
            $author = $_GET['author'];

            $result = getBookInfo($db, $name, $author);
            showBookMainInfo($result);
        }else {
            echo "<p>Strona nie istnieje</p>";
        }
        ?>
    </div>

</body>

</html>