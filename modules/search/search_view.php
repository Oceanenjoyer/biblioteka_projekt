<?php 
require_once 'search_model.php';
require_once 'search_contr.php';

function showBookSearchInfo($result) {

    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            if (file_exists($row['Book_imgpath'])){
                $imgpath = $row['Book_imgpath'];
            }else{
                $imgpath = 'images/notfound.png';
            }
    
            echo "<div onclick='location.href=\"book.php?name=" . urldecode($row['Book_title']) . "&author=" . urlencode($row['Book_author']) . "\";' class='grid-item'>
                <div class='grid-item-image'>
                    <img src='" . $imgpath ."'>
                </div>
    
                <div class='grid-item-info'>
                    <span>" . $row['Book_title'] . "</span>
                    <p>" . $row['Book_author'] . "</p>
                </div>
            </div>";
        }
    }else {
        echo '<div>Nic nie znaleziono</div>';
    }

}