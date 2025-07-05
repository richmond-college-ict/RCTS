<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/day_reg.css" rel="stylesheet">
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/2O6Yy5U2Q7ZyZSyWc7uZfIY5D4eCwW8l/66Dh5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<?php include('../pages/navbar.php'); ?>

<div class="container w-25" id="box">
    <h1>Email Verification</h1><br>

    <form id="censusForm" class="form" method="POST" action="../data/email-verification.php">
        <label for="census_code" class="form-label">Enter Census Code:</label>
        <input type="text" id="census_code" name="census_code" class="form-control" required><br>
        <button type="submit" id="submit" class="btn btn-secondary">Submit</button>
    </form>


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
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    footer {
        margin-top: auto;
    }
    #box {
        border: 2px solid gray;
        border-radius: 15px;
        padding: 30px;
    }
</style>
</body>
</html>
