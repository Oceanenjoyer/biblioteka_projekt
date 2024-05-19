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
            <!-- <div onclick="location.href='book.php?name=Utopce&author=Katarzyna-Puzyńska';" style="cursor: pointer;" class="grid-item">
                <div class="grid-item-image">
                    <img src="images/template.png">
                </div>

                <div class="grid-item-info">
                    <span>Utopce</span>
                    <p>Katarzyna Puzyńska</p>
                </div>
            </div>
            <div class="grid-item">2</div>
            <div class="grid-item">3</div>
            <div class="grid-item">4</div>
            <div class="grid-item">5</div>
            <div class="grid-item">6</div>
            <div class="grid-item">7</div>
            <div class="grid-item">8</div>
            <div class="grid-item">9</div> -->

            <?php
            showBookMainPage(getAllBookMainPage($db));
            ?>
        </div>
    </div>
</body>

</html>