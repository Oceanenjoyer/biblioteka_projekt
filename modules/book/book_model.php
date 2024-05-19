<?php 
function getBookInfo($db, $bookname, $authorname){
    $result = $db->query("SELECT * FROM books WHERE Book_title = ? AND Book_author = ? LIMIT 1", [$bookname, $authorname]);
    return $result;
}