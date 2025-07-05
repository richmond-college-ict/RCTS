<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
</head>

<body>
    <?php include('navbar.php');
    $id = $_GET['id'];

    include('../controller/connection.php');
    $mysql = "SELECT * FROM news_tbl WHERE  id = '$id'";
    $result = $con->query($mysql);
    $row = $result->fetch_assoc();


    ?>
    <div class="container">
        <h1><?php echo $row['news_header'];  ?></h1><br>
        <div><?php echo $row['news_description'];  ?></div>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; RCTS <?php echo date("Y"); ?></div>
                <div>
                    <a href="http://www.tech.richmondcollege.lk/" title="Official website of Richmond College Technology Society">RCTS</a>
                    &middot;
                    <a href="http://www.richmondcollege.lk/" title="Official website of Richmond College">Richmond College</a>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .container {
            margin-left: 10%;
            padding: 10px;
            height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }
    </style>
</body>

</html>