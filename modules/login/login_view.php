<?php

function checkLoginErrors() {
    if(isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        foreach ($errors as $error) {
            echo '<p class="form_error">'."❌".$error.'</p>';
        }
        unset($_SESSION['errors_login']);
    }else if (isset($_GET['login']) && $_GET['login'] == "success") {
        echo '<p class="form_success">✔ Zalogowano pomyślnie</p>';
        header("refresh:2;url=index.php");
    }

}