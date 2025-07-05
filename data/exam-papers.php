<?php
session_start();
include('../controller/connection.php'); // Include your database connection

if (isset($_SESSION['email'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $paper_name = $_POST['paper_name'];
        $year = $_POST['year'];
        $category = $_POST['category'];
        $subject = $_POST['subject'];
        
        // File upload configuration
        $targetDir = "../uploads/exam_papers/"; // Define the upload folder
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats (PDF in this case)
        $allowedTypes = array('pdf');
        
        if (in_array($fileType, $allowedTypes)) {
            // Upload the file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert form data into the database, including participants' names
                $sql = "INSERT INTO exam_papers (paper_name, year, category, subject, file) VALUES ('$paper_name', '$year', '$category', '$subject','$targetFilePath')";

                if ($con->query($sql) === TRUE) {
                    // Return success message to AJAX
                    echo json_encode(['status' => 'success', 'message' => 'Exam paper uploaded successfully']);
                } else {
                    // Return failure message to AJAX
                    echo json_encode(['status' => 'error', 'message' => 'Failed to save data']);
                }
            } else {
                // Return file upload error message to AJAX
                echo json_encode(['status' => 'error', 'message' => 'File upload failed']);
            }
        } else {
            // Return invalid file type message to AJAX
            echo json_encode(['status' => 'error', 'message' => 'Only PDF files are allowed']);
        }

        $con->close(); // Close the database connection
    }
} else {
    header("Location: ../login.php"); // Redirect to login if not logged in
    exit;
}
?>