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
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard | RCTS</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
</head>

<body class="sb-nav-fixed">

    <?php include 'top-navbar.php'; ?>
    <?php include 'left-side-bar.php'; 
    include('../controller/connection.php');
    $sql = 'SELECT id, name, role, img FROM members';
    $result = $con->query($sql);
    ?>

    <div id="layoutSidenav_content" class="container">
        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <form class="uploadForm" action="../data/change-members.php" method="POST" enctype="multipart/form-data">
                            <h3><?php echo $row['role']; ?></h3><br>
                            <input type="hidden" name="role" value="<?php echo $row['role']; ?>">
                            <input class="form-control" value="<?php echo $row['name']; ?>" name="name" required><br>
                            <input class="form-control fileupload" type="file" accept="image/*" name="file" required><br>
                            <img src="../<?php echo $row['img']; ?>" class="uploadedImage img-fluid" style="max-width: 200px; height: auto;"><br><br>
                            <button type="submit" class="btn btn-primary uploadButton">Update</button>
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <style>
        .card {
            margin-left: 10%;
            padding: 10px;
            border-radius: 10px;
        }
    </style>

    <script>
    $(document).ready(function () {
        $('.fileupload').on('change', function (e) {
            const file = e.target.files[0];
            const form = $(this).closest('.uploadForm'); // Get the closest form
            const uploadedImage = form.find('.uploadedImage')[0]; // Get the image element

            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    $(uploadedImage).attr('src', event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
    </script>

</body>

</html>

<?php } else {
    header("Location:../login.php");
    exit;
}
?>
