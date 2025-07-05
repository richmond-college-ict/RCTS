<?php
session_start();
if (isset($_SESSION['email'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="../assets/img/rcts/Logo Tech (2).png" type="image/x-icon">
    <title>Admin Dashboard | RCTS</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">

</head>

<body class="sb-nav-fixed">

    <?php include 'top-navbar.php'; ?>
    <?php include 'left-side-bar.php'; ?>
    <br>
    <div class="container">
        <h1>Upload Exam Papers</h1><br>
        <!-- Updated Form -->
        <form class="form-control" action="../data/exam-papers.php" method="POST" enctype="multipart/form-data">
            <br>
            <input class="form-control" placeholder="Paper Name" type="text" name="paper_name" required><br>
            <input class="form-control" placeholder="Year" type="number" name="year" min="2015" max="2030" step="1" required><br>

            <!-- Category Selection -->
            <select class="form-select" name="category" required>
                <option selected disabled>Select Category</option>
                <option value="1st term">1st term</option>
                <option value="2nd term">2nd term</option>
                <option value="3rd term">3rd term</option>
                <option value="unit test">Unit Test</option>
            </select><br>

            <!-- Subject Selection -->
            <select class="form-select" name="subject" required>
                <option selected disabled>Select Subject</option>
                <option value="SFT">SFT</option>
                <option value="ET">ET</option>
                <option value="ICT">ICT</option>
            </select><br>

            <!-- File Upload -->
            <input class="form-control" type="file" accept="application/pdf" name="file" required><br>

            <button class="btn btn-primary" type="submit">Upload</button>
        </form>
    </div>

    <style>
        .container {
            margin-top: 5%;
            margin-left: 17%;
        }
    </style>
        <script>
        $(document).ready(function () {
            // Attach the submit event to the form
            $('#uploadForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the form from refreshing the page

                // Create a FormData object to hold the form data
                var formData = new FormData(this);

                // Send the form data via AJAX
                $.ajax({
                    url: '../data/upload_exam_paper.php', // URL to the PHP action file
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        // Display success message using SweetAlert
                        Swal.fire({
                            title: 'Success!',
                            text: 'Exam paper uploaded successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#uploadForm')[0].reset(); // Reset the form after success
                            }
                        });
                    },
                    error: function () {
                        // Display error message using SweetAlert
                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to upload exam paper.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>

<?php
} else {
    header("Location:../login.php");
    exit;
}
?>
