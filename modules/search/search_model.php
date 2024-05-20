<?php

function getSearchedBooks($db, $search){
    $result = $db->query("SELECT * FROM books WHERE Book_title LIKE ?", ['%' .$search. '%']);
    return $result;
}