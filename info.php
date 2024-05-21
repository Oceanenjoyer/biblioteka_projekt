<?php
require_once 'modules/views.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="css/info.css">
</head>

<body>
    <div class="main">
    <?php viewStandard(); ?>
        <div class="info">
            <p>Font: Poppins</p>
            <p>Kolory:</p>
            <p style="color: #ffffff; background-color: #000000;">Pierwszy</p>
            <p style="color: #f7f7f7; background-color: #000000;">Drugi</p>
            <p style="color: #000000;">Trzeci</p>
            <p style="color: #2f2f2f;">Czwarty</p>
        </div>
    </div>
</body>

</html>