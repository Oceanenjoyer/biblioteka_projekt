<?php
require_once 'modules/database.php';
require_once 'modules/search/search_model.php';
require_once 'modules/search/search_contr.php';
require_once 'modules/search/search_view.php';
require_once 'modules/views.php';

viewStandard();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/search.css">
</head>

<body>
    <div class="main">
        

            <?php
            $searched = $_GET['search'];
            echo "<div class='searched'><h1>Wyszukiwanie dla: " . $searched . "</h1></div>";
            echo '<div class="grid-container">';
            if(isset($_GET['search']) && $_GET['search'] != ""){
                $search = getSearchedBooks($db, $searched);
                showBookSearchInfo($search);
            } else{
                echo 'Podaj książke do wyszukania';
            }
            echo '</div>';
            ?>
        </div>
    </div>
</body>

</html>