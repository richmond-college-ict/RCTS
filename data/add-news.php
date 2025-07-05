<?php 
include('../controller/connection.php');

// Retrieve and sanitize form inputs
$header = mysqli_real_escape_string($con, $_POST['header']);
$body = mysqli_real_escape_string($con, $_POST['body']);
$date = mysqli_real_escape_string($con, $_POST['date']);


// Check if the file input exists and has no upload errors
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {

   // Retrieve file information
   $img = $_FILES['file'];

   // Set the target directory for the uploaded image
   $target_dir = "../uploads/news_img/";
   $dir_name = "uploads/news_img/";
   $target_file = $target_dir . basename($img['name']); 
   $file_location = $dir_name . basename($img['name']);
   // Set maximum file size (15 MB)
   $maxFileSize = 15 * 1024 * 1024; // 15 MB
   $fileSize = $img['size'];

   // Get the file type using mime_content_type
   $fileType = mime_content_type($img['tmp_name']);
   $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

   // Check if the file exceeds the maximum size limit
   if ($fileSize > $maxFileSize) {
       header('Location: ../pages/news-list.php?code=data_error');
       exit();
   }

   // Check if the file type is allowed
   if (!in_array($fileType, $allowedTypes)) {
       header('Location: ../pages/news-list.php?code=data_error');
       exit();
   }

   // Try to move the uploaded file to the target directory
   if (!move_uploaded_file($img['tmp_name'], $target_file)) {
       header('Location: ../pages/news-list.php?code=upload_error');
       exit();
   }

   // Insert into the database with the correct image path
   $sql = "INSERT INTO news_tbl(news_header, news_description, img_path, date_time) VALUES ('$header', '$body', '$file_location', '$date')";

   if ($con->query($sql) === TRUE) {
       header('Location: ../pages/news-list.php?code=success');
       exit();
   } else {
       header('Location: ../pages/news-list.php?code=sql_error');
       exit();
   }
   
} else {
    // Handle the case where no file is uploaded or an error occurs
    header('Location: ../pages/news-list.php?code=data_error');
    exit();
}
?>
