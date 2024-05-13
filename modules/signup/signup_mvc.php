<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once '../database.php';
    require_once 'signup_model.php';
    require_once 'signup_contr.php';


    $username = $_POST['register_username'];
    $email = $_POST['register_email'];
    $password = $_POST['register_password'];
    $passwordrepeat = $_POST['register_passwordrepeat'];

    // ERROR HANDLER

    $errors = [];

    if(isInputEmpty($username, $password, $email)){
        array_push($errors, "Niektóre z pól są puste");
    }

    if(isEmailInvalid($email)){
        array_push($errors, "Podany email jest nieprawidłowy");
    }

    if(isAlreadyRegistered($db, $email)) {
        array_push($errors, "Podany email jest już zarejestrowany");
    }

    if(!isPasswordMatch($password, $passwordrepeat)){
        array_push($errors, "Podane hasła nie są takie same");
    }

    if(!checkPasswordLenght($password, 8)){
        array_push($errors, "Podane hasło jest za krótkie");
    }

    session_start();

    if($errors){
        $_SESSION['errors_signup'] = $errors;

        header("Location: ../../signup.php");
        die();
    }

    saveSignUp($db, $username, $email, $password);


    header("Location: ../../signup.php?signup=success");


} else {
    header("Location: ../../index.php");
    die();
}

?>
