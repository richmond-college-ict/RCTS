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
        <title>Settings - Admin | RCTS</title>
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

            <div class="container-fluid">
                <h1 class="mt-4">Settings</h1>
                <?php if (isset($_GET['success'])) { ?>
                    <!-- <div class='alert alert-success' role='alert'>
                            <?= $_GET['success'] ?>
                        </div> -->

                    <script>
                        Swal.fire({
                            icon: 'info',
                            title: 'Done',
                            text: "<?= $_GET['success'] ?>"
                        })
                    </script>
                <?php } ?>

                <?php if (isset($_GET['error'])) { ?>
                    <!-- <div class='alert alert-danger' role='alert'>
                            <?= $_GET['error'] ?>
                        </div> -->

                    <script>
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: "<?= $_GET['error'] ?>"
                        })
                    </script>
                <?php } ?>
                <!-- Your further code goes here. keep coding in this div -->
                <div class="container mt-3">
                    <form action="../data/change-email.php?email=<?= $_SESSION['email'] ?>" method="post" class="shadow p-3  mt-5 form-w">
                        <h3>Change Email</h3>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label">Old Email</label>
                            <input type="email" name="old_email" class="form-control" autocomplete="off" required value="<?= $_SESSION['email'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">New Email</label>
                            <input type="email" name="new_email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-warning" name="change_email">Change Email</button>
                    </form>

                    <form action="../data/change-password.php?email=<?= $_SESSION['email'] ?>" method="post" class="shadow p-3  mt-5 form-w">
                        <h3>Change Password</h3>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label">Old Password</label>
                            <input type="password" name="old_pwd" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">New Passowrd</label>
                            <div class="input-group mb-3">
                                <input type="text" name="new_pwd" class="form-control" id="passInput" required>
                                <button class="btn btn-secondary" id="gBTN">Random</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" name="c_new_pwd" class="form-control" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn btn-warning" name="change_pwd">Change Password</button>
                    </form>
                </div><br />

            </div>

            <!-- footer -->
            <?php include 'footer.php'; ?>
        </div>
        </div>

        <!-- content goes here -->
        <script src="../js/scripts.js"></script>
        <script>
            var gBTN = document.getElementById('gBTN');
            gBTN.addEventListener('click', function(e) {
                e.preventDefault();
                makePass(5)
            });

            function makePass(length) {
                let result = '';
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                const charactersLength = characters.length;
                let counter = 0;
                while (counter < length) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                    counter += 1;
                }

                passInput.value = result;
            }
        </script>

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