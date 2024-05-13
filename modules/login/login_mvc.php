<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once '../database.php';
    require_once 'login_model.php';
    require_once 'login_contr.php';

    $username = $_POST['login_username'];
    $password = $_POST['login_password'];


    $errors = [];

    if(isInputEmpty($username, $password)) {
        $errors['empty_input'] = "Niektóre z pól są puste";
    }

    $result = getUserData($db, $username);

    if(isUsernameInvalid($result)) {
        $errors['invalid_info'] = "Podane dane są nieprawidłowe";
    }

    if(!isUsernameInvalid($result) && isPasswordInvalid($password, $result['User_password'])) {
        $errors['invalid_info'] = "111111Podane dane są nieprawidłowe";
    }

    session_start();

    if($errors){
        $_SESSION['errors_login'] = $errors;


        header("Location: ../../login.php");
        die();
    }

    $_SESSION['user_id'] = $result['User_ID'];
    $_SESSION['user_name'] = $result['User_name'];

    header("Location: ../../login.php?login=success");

} else {
    header("Location: ../../index.php");
    die();
}

?>
