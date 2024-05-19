<?php

require_once 'adminpanel_model.php';

function deleteUser($db) {
    if (isset($_POST['deleteuser'])) {

        $did = $_POST['iduser'];
        echo "Pomyślnie usunięto użytkownika z ID " . $did;
        $db->query("DELETE FROM users WHERE User_ID = ?", [$did]);
    }
}

function deleteBook($db) {
    if (isset($_POST['deletebook'])) {
        $did = $_POST['idbook'];
        echo "Pomyślnie usunięto książke z ID " . $did;
        $db->query("DELETE FROM books WHERE Book_ID = ?", [$did]);
    }
}

function gotoBook() {
    if(isset($_POST['gotobook'])) {
        $title = $_POST['titlebook'];
        $author = $_POST['authorbook'];
        header("Location: book.php?name=$title&author=$author");
    }
}

function getBookData() {
    if(isset($_POST['Book_submit'])) {
        $title = $_POST['Book_title'];
        $genre = $_POST['Book_genre'];
        $author = $_POST['Book_author'];
        $description = $_POST['Book_description'];
        $release = $_POST['Book_release'];
        $pages = $_POST['Book_pages'];
        $imgpath = $_POST['Book_imgpath'];
    }
}