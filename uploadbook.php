<?php
define('MB', 1048576);
require_once 'modules/database.php';


$bookTitle = $_POST['Book_title'];
$bookGenre = $_POST['Book_genre'];
$bookAuthor = $_POST['Book_author'];
$bookDescription = $_POST['Book_description'];
$bookRelease = $_POST['Book_release'];
$bookPages = $_POST['Book_pages'];

$target_dir = "images/books/";
$temp = explode(".", $_FILES["Book_img"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($newfilename,PATHINFO_EXTENSION));

if(isset($_POST['Book_submit'])) {
    $check = getimagesize($_FILES['Book_img']['tmp_name']);

  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "Dodany plik nie jest zdjęciem";
    $uploadOk = 0;
  }
}

if (file_exists($newfilename)) {
  echo "Dodany plik już istnieje";
  $uploadOk = 0;
}

// if ($_FILES["Book_img"]["size"] > 10 * MB) {
//   echo "Dodany plik jest za duży";
//   $uploadOk = 0;
// }

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Tylko pliki o formacie JPG, JPEG, PNG są dozwolone";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Plik nie został dodany.";
} else {
  if(move_uploaded_file($_FILES["Book_img"]["tmp_name"],$target_dir . $newfilename)) {
    echo "Plik: ". htmlspecialchars( basename( $_FILES["Book_img"]["name"])). " został dodany";
    $db->query("INSERT INTO books (Book_author, Book_genre, Book_title, Book_description, Book_release, Book_pages, Book_imgpath) VALUES (?, ?, ?, ?, ?, ?, ?)", [$bookAuthor, $bookGenre, $bookTitle, $bookDescription, $bookRelease, $bookPages, $target_dir . $newfilename]);
    header("refresh:2;url=adminpanel.php?page=books");
  }else {
    echo "Plik nie został dodany2.";
  }

}


