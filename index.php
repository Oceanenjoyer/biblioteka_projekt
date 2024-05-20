<?php
require_once 'modules/database.php';
require_once 'modules/main/main_model.php';
require_once 'modules/main/main_contr.php';
require_once 'modules/main/main_view.php';
require_once 'modules/views.php';

?>

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
        <?php viewStandard(); ?>

        <h1>Nasze książki</h1>
        <div class="grid-container">
            <?php
            showBookMainPage(getAllBookMainPage($db));
            ?>
        </div>
    </div>
</body>

</html>