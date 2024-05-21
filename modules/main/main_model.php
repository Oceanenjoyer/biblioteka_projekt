<?php 
function getAllBookMainPage($db){
    $result = $db->query("SELECT Book_imgpath, Book_title, Book_author FROM books LIMIT 12");
    return $result;
}