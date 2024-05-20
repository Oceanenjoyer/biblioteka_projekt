<?php




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

// Check if image file is a actual image or fake image
if(isset($_POST['Book_submit'])) {
    $check = getimagesize($_FILES['Book_img']['tmp_name']);

  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($newfilename)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// if ($_FILES["Book_img"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["Book_img"]["tmp_name"],$target_dir . $newfilename)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["Book_img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}