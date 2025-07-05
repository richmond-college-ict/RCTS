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
        <title>Add a Banner - Admin | RCTS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="../../css/style.css"> -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/jquery-3.6.3.min.js"></script>
    </head>

    <body class="sb-nav-fixed">

        <?php include 'top-navbar.php'; ?>
        <?php include 'left-side-bar.php'; ?>

        <div id="layoutSidenav_content">
            <?php if (isset($_GET['success'])) { ?>
                <!-- <div class='alert alert-success' role='alert'>
                            <?= $_GET['success'] ?>
                        </div> -->

                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: "<?= $_GET['success'] ?>"
                    })
                </script>
            <?php } ?>
            <!-- content goes here. do not remove any code -->
            <div class="container-fluid">
                <h1 class="mt-4">All Feedbacks</h1>
                <!-- Your further code goes here. keep coding in this div -->
                <form action="../data/add-banner-data.php" method="post" class="shadow p-3  mt-5 form-w"
                    enctype='multipart/form-data'>
                    <h3>Fill all the Data</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Banner Image</label>
                        <input type="file" class="form-control" name="pic" accept="image/png, image/jpeg" required>
                        <div id="passwordHelpBlock" class="form-text">
                            Please select only a png or jpeg image for the banner image.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" required
                                name='description'></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Banner Type</label>
                        <select name="type" class="form-select">
                            <option value="1">Countdown Banner</option>
                            <option value="2">Normal Banner</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                </form>
            </div>

            <!-- footer -->
            <?php include 'footer.php'; ?>
        </div>
        </div>

        <!-- content goes here -->
        <script src="js/scripts.js"></script>
        <script src="../assets/js/bootstrap.bundle.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>

    </html>

<?php } else {
    header("Location:../login.php");
    exit;
}
?>