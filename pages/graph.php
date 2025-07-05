<?php
include("../controller/connection.php");

$sql = "SELECT DATE(visit_time) as visit_date, COUNT(*) as visit_count 
        FROM page_views 
        GROUP BY DATE(visit_time)";

$result = $con->query($sql);

$dates = [];
$counts = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dates[] = $row['visit_date'];
        $counts[] = $row['visit_count'];
    }
}

$con->close();

// Pass the data to JavaScript
$dates_json = json_encode($dates);
$counts_json = json_encode($counts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Counter Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h4>Visitors</h4>
    <div style="width: 50%; margin: 0 auto; margin-top: 5%;">
        <canvas id="viewsChart"></canvas>
    </div>

    <script>
        // Get the data from PHP
        var dates = <?php echo $dates_json; ?>;
        var counts = <?php echo $counts_json; ?>;

        var ctx = document.getElementById('viewsChart').getContext('2d');
        var viewsChart = new Chart(ctx, {
            type: 'line', // You can also use 'bar' for a bar chart
            data: {
                labels: dates,
                datasets: [{
                    label: 'Page Views',
                    data: counts,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <style>

        h4{
            padding-top: 30px;
            text-align: center;
            color: white;
            font-style: Serif	;
        }
    </style>
</body>
</html>
