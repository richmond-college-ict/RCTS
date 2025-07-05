<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">

</head>
<body>
<?php 

include('../controller/connection.php');

// Query to select the latest 3 posts ordered by date_time
$sql = "SELECT name, role, img 
        FROM members";

$result = $con->query($sql);

if ($result->num_rows > 0) { ?>
    <!-- Card Group Outside the Loop -->
    <div class="card-group">
        <div class="album-container d-flex gap-3 flex-wrap" id="news">
            <?php
                while ($row = $result->fetch_assoc()) { ?>
                <div class="card">
                        <div class="card-body">
                        <img src="<?php echo $row['img']; ?>"  class="card-img-top img-fluid" alt="img">
                        </div>
                        <div class="card-header">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p><?php echo $row['role']; ?></p>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
<?php
} else {
    echo '<h3>No data found</h3>';
}
?>

<style>
    /* Styling the card group */
    #news {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Aligns cards horizontally in the center */
        gap: 25px;
        padding: 15px;
        margin: 0 auto;
    }

    .card-group {
        padding: 15px;
    }
    h5,p{
        text-align: center;
    }

    .card {
        width: 300px;
        height: 400px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }
    .card-img-top {
        width: 100%;
        max-width: 300px; /* Restricts the image width */
        max-height: 400px; /* Restricts the image height */
        object-fit: cover; /* Ensures the image fills the area without distortion */
    }


    /* Ensures responsiveness on smaller screens */
    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
    body{
        margin-bottom: 0%;
    }
</style>
</body>
</html>