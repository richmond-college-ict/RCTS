<?php
session_start();
if (isset($_SESSION['email'])) {
    include '../controller/connection.php';
    $status = $_GET['status'] == "Yes" ? 1 : 0;
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM review_tbl WHERE is_deleted='0' AND is_approved='$status' AND id='$id'";
    $result1 = mysqli_query($con, $sql1);
    if(mysqli_num_rows($result1) == 1) {
        $row1 = mysqli_fetch_assoc($result1);
    }
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
        <title>Feedback Info - Admin | RCTS</title>
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

            <!-- content goes here. do not remove any code -->
            <div class="container-fluid">
                <h1 class="mt-4">Feedback Info</h1>
                <!-- Your further code goes here. keep coding in this div -->
                <form action="../data/approve-feedback.php?id=<?=$id?>" method="post" class="shadow p-3 mt-5 form-w">
                        <div class="mb-3">
                            <label class="form-label">Teacher</label>
                            <input type="text" name="teacher_name" class="form-control" autocomplete="off" required value="<?php if (!empty($row1['teacher_name'])) {echo $row1['teacher_name'];} else {echo "";}?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">School</label>
                            <input type="text" name="school_name" class="form-control" autocomplete="off" required value="<?php if (!empty($row1['school'])) {echo $row1['school'];} else {echo "";}?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teacher</label>
                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" required name='message'><?php if (!empty($row1['message'])) {echo $row1['message'];} else {echo "";}?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="approve">Approve</button>
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