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
    <title>Admin Dashboard | RCTS</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery-3.6.3.min.js"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <style>
        table {
            margin: 2%;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <?php include 'top-navbar.php'; ?>
    <?php include 'left-side-bar.php'; ?>

    <div id="layoutSidenav_content">
    <?php 
    include('../controller/connection.php');
    $sql = 'SELECT id, school_name, school_address, census_number, city, school_no, `school_email`, principal_name, tic_name, tic_no, tic_email, comp, notices, participants, year FROM techday';
    $result = $con->query($sql);
    ?>

    <div class="container-fluid">
        <h1>Registrations for Techday</h1>

        <!-- Save to Excel Button -->
         <br>
        <button id="export-button" class="btn btn-warning">Save to Excel</button>

        <table class="table table-striped" id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>School Name</th>
                    <th>School Address</th>
                    <th>Census Number</th>
                    <th>City</th>
                    <th>School Email</th>
                    <th>Principal Name</th>
                    <th>TIC Name</th>
                    <th>TIC Contact Number</th>
                    <th>TIC Email</th>
                    <th>Competitions</th>
                    <th>Notices/Comments</th>
                    <th>Participants</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['school_name']); ?></td>
                <td><?php echo htmlspecialchars($row['school_address']); ?></td>
                <td><?php echo htmlspecialchars($row['census_number']); ?></td>
                <td><?php echo htmlspecialchars($row['city']); ?></td>
                <td><?php echo htmlspecialchars($row['school_email']); ?></td>
                <td><?php echo htmlspecialchars($row['principal_name']); ?></td>
                <td><?php echo htmlspecialchars($row['tic_name']); ?></td>
                <td><?php echo htmlspecialchars($row['tic_no']); ?></td>
                <td><?php echo htmlspecialchars($row['tic_email']); ?></td>
                <td><?php echo htmlspecialchars($row['comp']); ?></td>
                <td><?php echo htmlspecialchars($row['notices']); ?></td>
                <td><?php echo htmlspecialchars($row['participants']); ?></td>
                <td><?php echo htmlspecialchars($row['year']); ?></td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="js/scripts.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('export-button').addEventListener('click', function() {
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.table_to_sheet(document.getElementById('data-table'));

            XLSX.utils.book_append_sheet(wb, ws, 'Techday Registrations');
            
            XLSX.writeFile(wb, 'Techday_Registrations.xlsx');
        });
    </script>
</body>
</html>

<?php 
} else {
    header("Location: ../login.php");
    exit;
}
?>
