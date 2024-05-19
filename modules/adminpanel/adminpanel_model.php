<?php

function getAllUsers($db)
{
    $result = $db->query("SELECT * FROM users");
    return $result;
}

function getAllBooks($db) {
    $result = $db->query("SELECT * FROM books");
    return $result;
}