<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/day_reg.css" rel="stylesheet">
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php include('../pages/navbar.php'); ?>
<?php 
include('../controller/connection.php');

// Initialize filters
$subject_filter = isset($_GET['subject']) ? $_GET['subject'] : '';
$year_filter = isset($_GET['year']) ? $_GET['year'] : '';
$category_filter = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT * FROM exam_papers WHERE 1 = 1";

// Add filters to the query
if ($subject_filter != '') {
    $sql .= " AND subject = '$subject_filter'";
}
if ($year_filter != '') {
    $sql .= " AND year = '$year_filter'";
}
if ($category_filter != '') {
    $sql .= " AND category LIKE '%$category_filter%'";
}

$result = mysqli_query($con, $sql);
?>
<div class="container mt-4">
    <form class="row g-3 mb-4" method="GET" action="">
        <div class="col-md-3">
            <select class="form-select" name="subject">
                <option value="">Filter by Subject</option>
                <option value="SFT" <?php echo ($subject_filter == 'SFT') ? 'selected' : ''; ?>>SFT</option>
                <option value="ICT" <?php echo ($subject_filter == 'ICT') ? 'selected' : ''; ?>>ICT</option>
                <option value="ET" <?php echo ($subject_filter == 'ET') ? 'selected' : ''; ?>>ET</option>
            </select>
        </div>

        <div class="col-md-3">
            <input type="number" class="form-control" name="year" placeholder="Filter by Year" value="<?php echo htmlspecialchars($year_filter); ?>">
        </div>

        <div class="col-md-3">
            <select class="form-select" name="category">
                <option value="">Filter by Category</option>
                <option value="1st term" <?php echo ($category_filter == '1st term') ? 'selected' : ''; ?>>1st term</option>
                <option value="2nd term" <?php echo ($category_filter == '2nd term') ? 'selected' : ''; ?>>2nd term</option>
                <option value="3rd term" <?php echo ($category_filter == '3rd term') ? 'selected' : ''; ?>>3rd term</option>
                <option value="unit test" <?php echo ($category_filter == 'unit test') ? 'selected' : ''; ?>>Unit test</option>
            </select>
        </div>


        <div class="col-md-3 d-flex align-items-center">
            <button type="submit" class="btn btn-primary me-2 w-50">Filter</button>
            <a href="downloads.php" class="btn btn-secondary w-50">Reset</a>
        </div>

    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Year</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['subject']); ?></td>
                <td><?php echo htmlspecialchars($row['year']); ?></td>
                <td><?php echo htmlspecialchars($row['paper_name']); ?></td>
                <td><a href="<?php echo htmlspecialchars($row['file']); ?>" download="<?php echo htmlspecialchars($row['paper_name']); ?>">Download</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
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

    body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer{
    margin-top: auto;
}
</style>
</body>
</html>
