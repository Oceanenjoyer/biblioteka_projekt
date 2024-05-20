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
        <div class="grid-container">
            <?php
            if(isset($_GET['search']) && $_GET['search'] != ""){
                $searched = $_GET['search'];
                echo 'Wyszukiwanie dla: ' . $searched;
    
                $search = getSearchedBooks($db, $searched);
                showBookSearchInfo($search);
            } else{
                echo 'Podaj książke do wyszukania';
            }

            ?>
        </div>
    </div>
</body>

</html>