<?php 
require_once 'book_model.php';
require_once 'book_contr.php';

function showBookMainInfo($result) {

    while ($row = $result->fetch_assoc()) {
        if (file_exists($row['Book_imgpath'])){
            $imgpath = $row['Book_imgpath'];
        }else{
            $imgpath = 'images/notfound.png';
        }
        
        echo '<div class="book__top">
                <div class="book__image">
                    <img src="' . $imgpath . '">
                </div>
                <div class="book__info">
                    <h1>' . $row['Book_title'] . '</h1>
                    <p>Autor: ' . $row['Book_author'] . '</p> 
                    <p>Gatunek: ' . $row['Book_genre'] . '</p>    
                    <p>Data Wydania: ' . $row['Book_release'] . '</p>
                    <p>Liczba stron: ' . $row['Book_pages'] . '</p>
                </div>
            </div>
            <div class="book__bottom">
                <h1>Opis</h1>
                <span>' . $row['Book_description'] . '</span>
            </div>';
    }
}