<?php

function isInputEmpty($username, $pwd, $email){
    if(empty($username) || empty($pwd) || empty($email)){
        return true;
    }
    else {
        return false;
    }
}

function isAlreadyRegistered($db, $email){
    if(getEmail($db, $email)){
        return true;
    }
    else {
        return false;
    }
}

function isEmailInvalid($email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } 
    else {
        return false;
    }
}

function isPasswordMatch($password, $passwordrepeat){
    if($password == $passwordrepeat){
        return true;
    }
    else {
        return false;
    }
}

function checkPasswordLenght($password, $minlenght) {
    if(strlen($password) >= $minlenght) {
        return true;
    } else {
        return false;
    }
}