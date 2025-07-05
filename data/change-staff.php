<?php  
include('../controller/connection.php');

// Check if the file input exists and has no upload errors
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {

    // Retrieve and sanitize other form fields
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $subject = mysqli_real_escape_string($con, string: $_POST['subject']); 
    $qualification = mysqli_real_escape_string($con, string: $_POST['qualification']); 
    $id = mysqli_real_escape_string($con, string: $_POST['id']); 


    $img = $_FILES['file'];
    
    // Set target directory for the uploaded image
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($img['name']); 
    $dir = "assets/img/";
    $name_dir = $dir . basename($img['name']);


    // Check if the directory exists and is writable
    if (!is_dir($target_dir) || !is_writable($target_dir)) {
        header('Location: ../pages/staff.php?code=upload_dir_error');
        exit();
    }

    // Move uploaded file to the target directory
    if (!move_uploaded_file($img['tmp_name'], $target_file)) {
        header('Location: ../pages/staff.php?code=upload_file_error');
        exit();
    }

    // Prepare SQL query to update the database
    $sql = "UPDATE `staff` 
            SET name='$name', 
            subject='$subject',
            qualification='$qualification',
            img='$name_dir' 
            WHERE id='$id'";

    // Execute the query and check for success
    if ($con->query($sql) === TRUE) {
        // Redirect on success
        header('Location: ../pages/staff.php?code=success');
        exit();
    } else {
        // Redirect or show an error if the query fails
        header('Location: ../pages/staff.php?code=sql_error');
        exit();
    }

} else {
    // Handle the case where no file is uploaded or an error occurs
    header('Location: ../pages/staff.php?code=data_error');
    exit();
}
?>
