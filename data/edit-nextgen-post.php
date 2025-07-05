<?php  
include('../controller/connection.php');

// Check if the file input exists and has no upload errors
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {

    // Retrieve and sanitize other form fields
    $id = intval($_POST['id']);
    $header = mysqli_real_escape_string($con, $_POST['header']);
    $body = mysqli_real_escape_string($con, $_POST['body']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    
    // Retrieve file information
    $img = $_FILES['file'];
    
    // Set the target directory for the uploaded image
    $target_dir = "../uploads/nextgen/";
    $dir_name = "uploads/nextgen/";
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
        echo "Error: File size exceeds the limit of 15 MB.";
        exit();
    }

    // Check if the file type is allowed
    if (!in_array($fileType, $allowedTypes)) {
        echo "Error: Invalid file type. Only JPEG, PNG, and GIF are allowed.";
        exit();
    }

    // Ensure the target directory is writable
    if (!is_writable($target_dir)) {
        echo "Error: Target directory is not writable.";
        exit();
    }

    // Try to move the uploaded file to the target directory
    if (!move_uploaded_file($img['tmp_name'], $target_file)) {
        echo "Error: Failed to move the uploaded file.";
        exit();
    }

    // Prepare SQL query to update the database
    $sql = "UPDATE `nextgen` 
            SET news_header='$header', 
                news_description='$body', 
                img_path='$file_location',
                date_time='$date'
            WHERE id='$id'";

    // Execute the query and check for success
    if ($con->query($sql) === TRUE) {
        // Redirect on success
        header('Location: ../pages/nextgen.php?code=success');
        exit();
    } else {
        // Output the SQL error for debugging
        echo "SQL Error: " . $con->error;
        exit();
    }

} else {
    // Handle the case where no file is uploaded or an error occurs
    echo "Error: No file uploaded or upload error. Code: " . $_FILES['file']['error'];
    exit();
}
?>
