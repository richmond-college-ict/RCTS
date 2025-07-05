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
        <title>All Feedbacks - Admin | RCTS</title>
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
                <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">School</th>
                                <th scope="col">Feedback</th>
                                <th scope="col">Status</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	include '../controller/connection.php';
                        		$count = 1;
                        		$sql1 = "SELECT * FROM review_tbl WHERE is_deleted='0' AND year='".date("Y")."' ORDER BY is_approved ASC";
                        		$result1 = mysqli_query($con, $sql1);
                        		if(mysqli_num_rows($result1) > 0) {
                        			while($row1 = mysqli_fetch_assoc($result1)) {
                        				echo "<tr>";
                        				$id = $row1['id'];
                        				$message = $row1['message'];
                        				$school = $row1['school'];
                        				$status = $row1['is_approved'] == 1 ? "Yes" : "No";
                        				echo "<td>$count</td>";
                        				echo "<td>$school</td>";
                        				echo "<td>$message</td>";
                        				echo "<td><b>$status</b></td>";
                        			?>
                        			<td>
                                        <a class="btn btn-warning" name="review" href="feedback-info.php?id=<?= $id ?>&status=<?=$status?>">Review</a>
                                        <?php
                                        	if($status == "No") {
                                        ?>
                                        <a class="btn btn-success" name="approve" href="../data/approve-feedback.php?id=<?=$id?>">Approve</a>
                                    <?php } ?>
                                        <a class="btn btn-danger" name="delete" href="../data/delete-feedback.php?id=<?= $id ?>">Delete</a>
                                    </td>
                                    <?php $count += 1; }
                        		} else {
                        			// display an alert -> no feedbacks
                        		}
                        	?>
                        </tbody>
                    </table>
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