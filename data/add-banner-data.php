<?php
session_start();
if (isset($_SESSION['email'])) {
    if (isset($_POST['add'])) {
        include '../controller/connection.php';
        $name = $_FILES['pic']['name'];
        $type = $_FILES['pic']['type'];
        $error = $_FILES['pic']['error'];

        $description = $_POST['description'];
        $banner_type = $_POST['type'];

        if (!file_exists("/uploads")) {
            mkdir("../uploads", 0777, true);
        }

        if ($error == 0) {
            // with profile pic
            $filename = "../uploads/$name";

            // resize the image
            if ($type == 'image/jpeg' || $type == 'image/png') {
                // Get the file size
                $file_size = $_FILES['pic']['size'];

                // Get the temporary file name
                $tmp_name = $_FILES['pic']['tmp_name'];

                // Set the maximum file size (in bytes)
                $max_size = 2000000;
                if ($file_size <= $max_size) {
                    // Set the new width and height 
                    if ($banner_type == '1') {
                        $new_width = 512;
                        $new_height = 512;
                    } else {
                        list($width, $height) = getimagesize($tmp_name);
                        $new_width = $width;
                        $new_height = $height;
                    }
                    // Get the original image dimensions 
                    list($width, $height) = getimagesize($tmp_name);
                    // Create a new image with the new dimensions 
                    $new_image = imagecreatetruecolor($new_width, $new_height);
                    // Load the original image
                    if ($type == 'image/jpeg') {
                        $original_image = imagecreatefromjpeg($tmp_name);
                    } else {
                        $original_image = imagecreatefrompng($tmp_name);
                    }
                    // Resize the original image to the new dimensions
                    imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    // Save the new image 
                    if ($type == 'image/jpeg') {
                        imagejpeg($new_image, $filename);
                    } else {
                        imagepng($new_image, $filename);
                    }
                    // Free up memory 
                    imagedestroy($original_image);
                    imagedestroy($new_image);
                    // Display a success message 

                    $sql1 = "INSERT INTO banner_tbl (img_path, description, is_countdown, status) VALUES 
                    ('uploads/" . $name . "', '$description', '$banner_type', '1')";
                    if (mysqli_query($con, $sql1)) {
                        $sm = "Banner Uploaded!";
                        header("Location: ../pages/add-banner.php?success=$sm");
                        exit;
                    } else {
                        $em = "Error uploading image";
                        header("Location: ../pages/add-banner.php?error=$em");
                        exit;
                    }
                } else {
                    $em = " File size is too large. (File size < 2MB)";
                    header("Location: ../pages/add-banner.php?error=$em");
                    exit;
                }
            } else {
                // Display an error message if the file is not an image 
                $em = "File is not an image. Images (.png/ .jpeg) Only.";
                header("Location: ../pages/add-banner.php?error=$em");
                exit;
            }
        } else {
            //
        }
    }
}