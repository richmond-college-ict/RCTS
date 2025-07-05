<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>
<?php
include('includes/navbar.php');
include('controller/connection.php');

$mysql = "SELECT id, news_header, news_description, date_time, img_path 
        FROM news_tbl 
        ORDER BY date_time DESC";
$result = $con->query($mysql);

if ($result->num_rows > 0) {
    echo '<div class="card-group">';
    echo '<div class="album-container d-flex gap-3 flex-wrap" id="news">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<a href="pages/view-news.php?id=' . urlencode($row['id']) .' ">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<img src="' . $row['img_path'] . '" class="card-img-top img-fluid" alt="img">';
        echo '</div>';
        echo '<div class="card-header">';
        echo '<h5 class="card-title">' . htmlspecialchars($row['news_header']) . '</h5>';
        echo '<p>' . htmlspecialchars($row['date_time']) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
    
    echo '</div>';
    echo '</div>';
} else {
    echo '<h3>No data found</h3>';
}
?>




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
    .container{
        margin-left: 10%;
        padding: 10px;
        height: 100%;
    }
    body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer{
    margin-top: auto;
}#news {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Aligns cards horizontally in the center */
        gap: 25px;
        padding: 15px;
        margin: 0 auto;
    }



    .card {
        width: 350px;
        height: 400px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }
    #card {
        width: 350px;
        height: 420px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }


    .card:hover {
        transform: scale(1.05);
    }
    .card-img-top {
        width: 100%;
        max-width: 320px; /* Restricts the image width */
        max-height: 250px; /* Restricts the image height */
        object-fit: cover; /* Ensures the image fills the area without distortion */
    }

</style>
</body>
</html>
