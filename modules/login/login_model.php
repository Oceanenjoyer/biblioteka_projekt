<?php 

function getUserData($db, $username){
    $result = $db->query("SELECT * FROM users WHERE User_name = ?", [$username]);
    return $result->fetch_assoc();
}