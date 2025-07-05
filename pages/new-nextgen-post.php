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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">

        <!-- jQuery -->
        <script src="js/jquery-3.6.3.min.js"></script>
        
        <!-- TinyMCE (for rich text editor functionality) -->
        <script src="https://cdn.tiny.cloud/1/1reutx8ysvqsauivjj5nw36nxntegk11hjosqeorx2jfl5jg/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#body',  // Change this value according to your HTML
                plugins: 'link image code lists table',
                toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
                height: 300,
                images_upload_url: 'upload.php', // You'll need a server-side script to handle image uploads
                automatic_uploads: true,
                file_picker_types: 'image',
                image_title: true,
                file_picker_callback: function (cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function () {
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.onload = function () {
                            cb(reader.result, {alt: file.name});
                        };
                        reader.readAsDataURL(file);
                    };
                    input.click();
                }
            });
        </script>

        <style>
            .container {
                margin-top: 1%;
            }
        </style>

    </head>

    <body class="sb-nav-fixed">

        <?php include 'top-navbar.php'; ?>
        <?php include 'left-side-bar.php'; ?>
        <div id="layoutSidenav_content">
            <div class="container">
                <form class="form" action="../data/new-nextgen-post.php" method="post" enctype="multipart/form-data">
                    <input class="form-control" placeholder="Header" name="header"><br>

                    <!-- Rich Text Editor for Blog Content -->
                    <textarea id="body" name="body" class="form-control" placeholder="Context"></textarea><br>

                    <!-- File Input for Image Upload -->
                    <input type="file" accept=".png,.jpg,.jpeg,.webp,image/png" class="form-control" name="file"><br>

                    <input type="hidden" value="<?php echo date("Y/m/d");?>" name="date">

                    <button type="submit" class="btn btn-primary">Publish</button>
                </form>
            </div>

            <!-- footer -->
            <?php include 'footer.php'; ?>
        </div>

        <!-- Scripts -->
        <script src="js/scripts.js"></script>
        <script src="../assets/js/bootstrap.bundle.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

    </body>

    </html>

<?php
} else {
    header("Location:../login.php");
    exit;
}
?>
