<?php  
include('../controller/connection.php');

// Check if the file input exists and has no upload errors
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {

    // Retrieve and sanitize other form fields
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $role = mysqli_real_escape_string($con, $_POST['role']); 
    $img = $_FILES['file'];
    
    // Set target directory for the uploaded image
    $target_dir = "../uploads/members/";
    $target_file = $target_dir . basename($img['name']); 
    $dir = "uploads/members/";
    $name_dir = $dir . basename($img['name']);


    // Check if the directory exists and is writable
    if (!is_dir($target_dir) || !is_writable($target_dir)) {
        header('Location: ../pages/change-members.php?code=upload_dir_error');
        exit();
    }

    // Move uploaded file to the target directory
    if (!move_uploaded_file($img['tmp_name'], $target_file)) {
        header('Location: ../pages/change-members.php?code=upload_file_error');
        exit();
    }

    // Prepare SQL query to update the database
    $sql = "UPDATE `members` 
            SET name='$name', 
                img='$name_dir' 
            WHERE role='$role'";

    // Execute the query and check for success
    if ($con->query($sql) === TRUE) {
        // Redirect on success
        header('Location: ../pages/change-members.php?code=success');
        exit();
    } else {
        // Redirect or show an error if the query fails
        header('Location: ../pages/change-members.php?code=sql_error');
        exit();
    }

} else {
    // Handle the case where no file is uploaded or an error occurs
    header('Location: ../pages/change-members.php?code=data_error');
    exit();
}
?>
