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
        <!-- <link rel="stylesheet" type="text/css" href="../../css/style.css"> -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/jquery-3.6.3.min.js"></script>
        <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">


        <style type="text/css">
			.card-counter {
			  box-shadow: 2px 2px 10px #dadada;
			  margin: 5px;
			  padding: 20px 10px;
			  background-color: #fff;
			  height: 100px;
			  border-radius: 5px;
			  transition: 0.3s linear all;
			}

			.card-counter:hover {
			  box-shadow: 4px 4px 20px #dadada;
			  transition: 0.3s linear all;
			}

			.card-counter.primary {
			  background-color: #007bff;
			  color: #fff;
			}
      .card-counter.register {
			  background-color: lightseagreen;
			  color: #fff;
			}

			.card-counter.danger {
			  background-color: #ef5350;
			  color: #fff;
			}

			.card-counter.success {
			  background-color: #66bb6a;
			  color: #fff;
			}

			.card-counter.info {
			  background-color: #26c6da;
			  color: #fff;
			}

			.card-counter .count-numbers {
			  position: absolute;
			  right: 35px;
			  top: 20px;
			  font-size: 32px;
			  display: block;
			}

			.card-counter .count-name {
			  position: absolute;
			  right: 35px;
			  top: 65px;
			  font-style: italic;
			  text-transform: capitalize;
			  opacity: 0.5;
			  display: block;
			  font-size: 18px;
			}
        </style>


    </head>

    <body class="sb-nav-fixed">

        <?php include 'top-navbar.php'; ?>
        <?php include 'left-side-bar.php'; ?>

        <div id="layoutSidenav_content">

            <!-- content goes here. do not remove any code -->
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Welcome back,
                        <b>
                            <?php
                            include '../controller/connection.php';
                            $sql1 = "SELECT name FROM user_tbl WHERE email='" . $_SESSION['email'] . "'";
                            $result1 = mysqli_query($con, $sql1);
                            $data = mysqli_fetch_assoc($result1);
                            echo $data['name'];
                            ?>
                        </b> !
                    </li>
                </ol>

                <div class="row">
                  
          <div class="col-md-3">
            <div class="card-counter primary">
              <!-- <i class="fa fa-code-fork"></i> -->
              <i class="fa-solid fa-comments fa-4x" style="opacity: 0.4;"></i>
              <span class="count-numbers">
              	<?php
              		$sql2 = "SELECT COUNT(*) FROM review_tbl WHERE is_deleted='0' AND is_approved='1' AND year='".date("Y")."'";
              		$result2 = mysqli_query($con, $sql2);
              		if(mysqli_num_rows($result2) > 0) {
              			$row1 = mysqli_fetch_assoc($result2);
              			echo $row1['COUNT(*)'];
              		}
              	?>
              </span>
              <span class="count-name">Approved Feedbacks</span>
            </div>
            
          </div>
          <div class="col-md-3">
    <div class="card-counter register">
        <i class="fa-solid fa-school fa-4x" style="opacity: 0.4;"></i>
        <span class="count-numbers">
            <?php
                $sql3 = "SELECT COALESCE(SUM(id), 0) AS val FROM techday";
                $result3 = mysqli_query($con, $sql3);
                if(mysqli_num_rows($result3) > 0) { 
                    $row1 = mysqli_fetch_assoc($result3);
                    echo $row1['val']; 
                } else {
                    echo 0;
                } 
            ?>
        </span>
        <span class="count-name">Registered Schools</span>
    </div>
</div>

          
          <div class="col-md-3">
            <div class="card-counter info">
              <!-- <i class="fa fa-ticket fs-1"></i> -->
              <i class="fa-regular fa-bookmark fa-4x" style="opacity: 0.4;"></i>
              <span class="count-numbers">
              	<?php
              		$sql2 = "SELECT COUNT(*) FROM review_tbl WHERE is_deleted='0' AND is_approved='0' AND year='".date("Y")."'";
              		$result2 = mysqli_query($con, $sql2);
              		if(mysqli_num_rows($result2) > 0) {
              			$row1 = mysqli_fetch_assoc($result2);
              			echo $row1['COUNT(*)'];
              		}
              	?>
              </span>
              <span class="count-name">Waiting for Approval</span>
            </div>
          </div>
          
        </div>
        
<?php include('graph.php'); ?>




                <!-- Your further code goes here. keep coding in this div -->
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