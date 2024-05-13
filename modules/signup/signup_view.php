<?php

function checkSignUpErrors() {
    if(isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        foreach ($errors as $error) {
            echo '<p class="form_error">'."❌".$error.'</p>';
        }
        unset($_SESSION['errors_signup']);
    }else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo '<p class="form_success">✔ Zarejestrowana pomyślnie</p>';
    }
}