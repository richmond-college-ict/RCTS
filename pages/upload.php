<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/common_data/";
        $filename = basename($_FILES['file']['name']);
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            echo "File uploaded successfully: " . $target_file;
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file uploaded or there was an error.";
    }
}
?>
