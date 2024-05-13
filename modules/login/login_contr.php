<?php

function isInputEmpty($username, $pwd){
    if(empty($username) || empty($pwd)){
        return true;
    }
    else {
        return false;
    }
}

function isUsernameInvalid($username) {
    if(!$username){
        return true;
    } 
    else {
        return false;
    }
}

function isPasswordInvalid($password, $hashedpassword) {
    if(!password_verify($password, $hashedpassword)){
        return true;
    } else {
        return false;
    }
}