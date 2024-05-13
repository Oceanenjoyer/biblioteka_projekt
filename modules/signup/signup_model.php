<?php 

function getEmail($db, $email){
    $result = $db->query("SELECT User_email FROM users WHERE User_email = ?", [$email]);
    return $result->fetch_assoc();
}

function saveSignUp($db, $username, $email, $password) {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $db->query("INSERT INTO users (User_name, User_email, User_password) VALUES (?, ?, ?)", [$username, $email, $hash]);
}