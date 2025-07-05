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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">

        <script src="js/jquery-3.6.3.min.js"></script>

        <style type="text/css">

            table{
                margin: 2%;
            }
        </style>


    </head>

    <body class="sb-nav-fixed">

        <?php include 'top-navbar.php'; ?>
        <?php include 'left-side-bar.php'; ?>

        <div id="layoutSidenav_content">
        <?php 
    
$code = $_GET['code'];
include('../controller/connection.php');
$sql = 'SELECT id, news_header, news_description, date_time, img_path FROM news_tbl ORDER BY date_time';
$result = $con->query($sql);
?>
<br>
<div>
    <?php 
        if($code == 'success'){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Upadated Successfully</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }elseif($code == 'sql_error'){
           echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Oops,</strong>A SQL error has occured
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }elseif($code == 'data_error'){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Error Occured</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }elseif($code == 'upload_error'){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>upload_error Occured</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }elseif($code == 'del_success'){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Delete Successfully</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>
</div>

<div class="container-fluid">
    <h1>News & Updates</h1>
    <button class="btn btn-primary" onclick="location.href='new-news.php';">New Post</button>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Header</th>
                <th>date modified</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['news_header']); ?></td>
            <td><?php echo htmlspecialchars($row['date_time']); ?></td>
            <td>
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-link" onclick="location.href='<?php echo 'edit-news.php?id='  .urlencode($row['id']);  ?>';">Edit</button>              
                <button type="button" class="btn btn-link" onclick="location.href='../data/delete-news.php?id=<?php echo urlencode($row['id']) ?>';">Delete</button>

            </td>
        </tr>

    
        <?php endwhile; ?>
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