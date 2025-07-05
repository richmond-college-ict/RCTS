<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Richmond College Technology Society</title>
  <meta
    content="RCTS, ET, SFT, ICT, Richmond College, Galle, Tech, Technology, Technology Society, Technology Section, richmond college technology society"
    name="keywords">

  <meta name="description" content="The Official Website of the Richmond College Technology Society" />
  <meta name="author" content="Dasun Nethsara" />
  <meta name="title" content="Richmond College Technology Society" />
  <meta name="og:title" content="Richmond College Technology Society" />
  <meta name="og:description" content="The Official Website of the Richmond College Technology Society" />
  <meta name="og:keywords"
    content="RCTS, ET, SFT, ICT, Richmond College, Galle, Tech, Technology, Technology Society, Technology Section, richmond college technology society" />
  <meta name="og:author" content="Dasun Nethsara" />

  <!-- Favicons -->
  <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="assets/js/jquery-3.6.3.min.js"></script>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php include('pages/view_counter.php'); //view counter  ?> 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    var i = 0;
    var txt = 'Richmond College Technology Society'; /* The text */
    var speed = 100; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
  </script>
</head>

<body onLoad="typeWriter();">
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="layer">
      <div class="hero-container">
        <a href="index.php" class="hero-logo" data-aos="zoom-in"><img src="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png"
            alt="Logo of the Richmond College Technology Society"></a>
        <h1 data-aos="zoom-in">Welcome!<br>
          <p id="demo" style="color: rgb(0, 138, 255);"></p>
        </h1>
        <h2 data-aos="fade-up">- <span class="badge" style="color: rgb(140, 17, 72);">EXPERIENCE</span> - <span
            class="badge" style="color: rgb(140, 17, 72);">PRECISION</span> - <span class="badge"
            style="color: rgb(140, 17, 72);">EXCELLENCE</span> -
        </h2>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center bg-light">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png"
            alt="Logo of the Richmond College Technology Society" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#nextgen">NextGen'25</a></li>
          <li><a class="nav-link scrollto" href="#newsevents">News & Events</a></li>
          <li><a class="nav-link scrollto" href="#subjects">Subjects</a></li>
          <li><a class="nav-link scrollto" href="#staff">Staff</a></li>
          <li><a class="nav-link scrollto" href="#teamStructure">Teams</a></li>
          <li><a class="nav-link scrollto" href="#members">Members</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="./gallery.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="./pages/downloads.php">Download</a></li>
          <li><a class="nav-link" href="./login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="nextgen" class="recent-posts sections-bg">
<div data-aos="fade-up">
<div class="section-header">
          <h2 class="text-center" style="font-family: Share Tech Mono, monospace; font-size: 50px;" >Nextgen'25</h2>
</div>

<?php 

include('controller/connection.php');

// Query to select the latest 3 posts ordered by date_time
$sql = "SELECT id, news_header, news_description, date_time, img_path 
        FROM nextgen 
        ORDER BY date_time DESC 
        LIMIT 3";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-group">';
    echo '<div class="album-container d-flex gap-3 flex-wrap" id="news">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<a href="pages/nextgen-posts.php?id=' . urlencode($row['id']) .' ">';
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

</div>
<div  data-aos="fade-up" id="timer">
<script src="https://cdn.logwork.com/widget/countdown.js"></script>
<a href="https://logwork.com/countdown-timer" class="countdown-timer" data-timezone="Asia/Colombo" data-date="2024-11-19 00:00" onclick="event.preventDefault(); window.location.href='#';">Days Remaining</a>


</div>
</div>
 </section>
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="newsevents" class="recent-posts sections-bg"  data-aos="fade-up ">
<div data-aos="fade-up">
<div class="section-header">
          <h2 class="text-center">News and Updates</h2>
</div>
<div  data-aos="fade-up ">

<?php 

include('controller/connection.php');
// Query to select the latest 3 posts ordered by date_time
$sql = "SELECT id, news_header, news_description, date_time, img_path 
        FROM news_tbl 
        ORDER BY date_time DESC 
        LIMIT 3";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-group">';
    echo '<div class="album-container d-flex gap-3 flex-wrap" id="news">';
    
    while ($row = $result->fetch_assoc()) {
         echo '<a href="pages/view-news.php?id=' . urlencode($row['id']) .' ">';        echo '<div class="card">';
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
<center><button class="btn"onclick="location.href='news.php'">View All</button></center>

</div>


 </section>
     <!-- End Recent Blog Posts Section -->

    <!-- ======= Subejcts Section ======= -->
  <section id="subjects" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 class="text-center">Our Subjects</h2>
        </div>

        <div class="row gy-4  mt-1">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="./assets/img/subjects/et.jpg" alt="Engineering Technology" class="img-fluid" onclick="">
              </div>

              <h2 class="title">
                Engineering Technology
              </h2>
            </article>
          </div><!-- End subject item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="./assets/img/subjects/sft.jpg" alt="Science For Technology" class="img-fluid" onclick="">
              </div>

              <h2 class="title">
                Science For Technology
              </h2>
            </article>
          </div><!-- End subject item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="./assets/img/subjects/ict.jpg" alt="Information and Communication Technology" class="img-fluid" onclick="">
              </div>

              <h2 class="title">
                Information and Communication Technology
              </h2>
            </article>
          </div><!-- End subject item -->

        </div>

      </div>
    </section><!-- End subjects Section -->

  <main id="main">
  <section id="staff" class="team" style="background-color: #fff;">
    <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
            <h2 style="color: #000;">Staff</h2>
        </div>

        <?php 
        include('controller/connection.php');
        $sql = "SELECT id, name, subject, qualification, img FROM staff";
        $result = $con->query($sql);

        if ($result->num_rows > 0) { ?>
            <!-- Card Container with Flexbox for alignment -->
            <div class="card-container" id="card-container">
                <?php
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="card" id="card">
                        <div class="card-body">
                            <img src="<?php echo $row['img']; ?>" class="card-img-top img-fluid" alt="img">
                        </div>
                        <div class="card-header">
                            <h5 id="card-name" class="card-title"><?php echo $row['name']; ?></h5>
                            <p id="role" style="color: maroon;"><?php echo $row['subject']; ?></p>
                            <p id="role" style="color: maroon;"><?php echo $row['qualification']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Show More button -->
            <button id="showMoreBtn" class="bi bi-arrow-down-circle" onclick="showMore()">  Former Staff</button>
        <?php
        } else {
            echo '<h3>No data found</h3>';
        }
        ?>
    </div>

    <script>
        function showMore() {
            // Get all the cards in the container
            const cards = document.querySelectorAll('#card-container .card');
            
            // Loop through the cards and show the hidden ones
            cards.forEach((card, index) => {
                if (index >= 6) {  // Starting from the 7th card
                    card.style.display = 'block';  // Show hidden cards
                }
            });

            // Hide the 'Show More' button once all cards are shown
            document.getElementById('showMoreBtn').style.display = 'none';
        }
    </script>

    <style>
     /* Style for each card */
.card {
    width: 350px; /* Ensures consistent width */
    height: 400px; /* Ensures consistent height */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
    margin-bottom: 20px; /* Adds spacing between cards */
    background-color: white;
    border-radius: 10px;
}

/* Image inside each card */
.card-img-top {
    width: 100%;
    height: 250px; /* Sets a fixed height for the image */
    object-fit: cover; /* Makes sure the image fills the area without distortion */
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Flexbox container to align all cards */
.card-container {
    display: flex;
    flex-wrap: wrap; /* Ensures the cards wrap if there are too many */
    justify-content: center; /* Centers the cards horizontally */
    gap: 20px; /* Adds spacing between the cards */
    padding: 20px; /* Adds padding around the card container */
}

/* Button style */
#showMoreBtn {
    display: block;
    margin: 20px auto;
    padding: 12px 30px; /* Increased padding for a more comfortable click area */
    font-size: 16px;
    font-weight: bold; /* Bolder text for better readability */
    border: 2px solid black; /* Slightly thicker border for a sharper look */
    border-radius: 25px; /* Rounded corners for a smooth button shape */
    color: black;
    background-color: transparent;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Added color and transform transitions */
}

/* On hover: changes background and text color with smooth transition */
#showMoreBtn:hover {
    background-color: black;
    color: white;
    transform: scale(1.05); /* Slight scaling effect for hover interaction */
}

/* Optional: Add a subtle shadow for a more elevated effect */
#showMoreBtn {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#showMoreBtn:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}


/* Hide all cards after the first 6 by default */
#card-container .card:nth-child(n+7) {
    display: none;
}


    </style>

      </div>
    </section><!-- End Team Section -->

    <section id="teamStructure" class="services" style="background-color: #fff;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color: #000;">Teams</h2>
          <!-- <p>These are the teams under the Technology Society</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="icon-box" data-aos="fade-up"><br />
              <i class="fa fa-cogs" aria-hidden="true"></i>
              <h4 style="color: #000;">Main Team</h4>
              <p>We take pictures and videos at our society events. Also We cover all events in our school.</p>
            </div><br />
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="fa fa-code" aria-hidden="true"></i>
              <h4 style="color: #000;">Web Team</h4>
              <p>We are managing this website, school network and more.</p>
            </div><br />
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <h4 style="color: #000;">Streamers Team</h4>
              <p>We are live streaming our society functions and events</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12" data-aos="fade-left" data-aos-delay="100" style="display: flex;
            align-items: center;
            flex-wrap: wrap;">
            <img src="https://i.ibb.co/k6Xfw43/1679572771800.jpg" class="img-fluid rounded">
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Members Section ======= -->
  <section id="members" class="team recent-posts sections-bg">
  <div data-aos="fade-up">
  <div class="section-header">
          <h2 class="text-center">Members</h2>
        </div>
  <?php 

include('controller/connection.php');

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
                            <h5 id="card-name" class="card-title"><?php echo $row['name']; ?></h5>
                            <p id="role"><?php echo $row['role']; ?></p>
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
</div>
  </section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background-color: #fff;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color: #000;">Contact</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3 style="color: #000;">Our Address</h3>
              <p style="color: #000;">Richmond Hill Rd, Galle 80000, Sri Lanka</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3 style="color: #000;">Email Us</h3>
              <p style="color: #000;">nexgen.rcts@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3 style="color: #000;">Call Us</h3>
              <p style="color: #000;">+94 77 828 2807</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.5788732854317!2d80.20548092701924!3d6.052363462013656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173ef4cc6b88d%3A0xd9c5ef5a5f92100b!2sRichmond%20College!5e0!3m2!1sen!2ssg!4v1687810154395!5m2!1sen!2ssg"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="https://formsubmit.co/rctsenovus@gmail.com" method="POST" role="form" class="php-email-form"
              data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" autocomplete="off" class="form-control" id="name"
                    placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" autocomplete="off" name="email" id="email"
                    placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" autocomplete="off" name="subject" id="subject"
                  placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" autocomplete="off" name="message" rows="5" placeholder="Message"
                  required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="https://richmondcollege.lk" class="scrollto footer-logo"><img
                src="https://i.ibb.co/27q0FvJ/Richmond-Colleg-LOGO.png" alt="Logo of the Richmond College"></a>
            <a href="#header" class="scrollto footer-logo"><img src="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png"
                alt="Logo of the Richmond College Technology Society" style="margin-left: 10px;"></a>
            <h3>Richmond College Technology Society</h3>
            <p>Richmond College is a school with both primary and secondary sections located in Galle, Sri Lanka.
              Today, Richmond
              College is one of the best schools in Sri Lanka. Richmond College, now in its second century, has been
              shaped by many
              people.</p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://www.facebook.com/profile.html?id=100090979585946" class="facebook"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/rctsenovus?igshid=MTIzZWQxMDU=" class="instagram"><i
              class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>RCTS</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed and Developed by <span onclick="redirectToPage(3);"
                    title="Click to go to the LinkedIn profile of the Developer">Dasun Nethsara</span>
            </div>
        </div>
  </footer><!-- End Footer -->

  <!-- loading screen -->
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <script>
    $(window).on("load", function () {
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <script type="text/javascript" language="javascript">
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        setTimeout(() => {
          preloader.classList.add('loaded');
        }, 1000);
        setTimeout(() => {
          preloader.remove();
        }, 2000);
      });
    }

  </script>

  <script>
    function redirect() {
      
    }

    function redirectToPage(page) {
      if (page == 1) {
        document.location.href = "./results.php";
      } else if (page == 2) {
        document.location.href = "./gallery.php";
      } else {
        window.open("https://www.linkedin.com/in/dasun-nethsara-086354282/", "_blank");
      }
    }
  </script>
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
        max-height: 300px; /* Restricts the image height */
        object-fit: cover; /* Ensures the image fills the area without distortion */
    }


    /* Ensures responsiveness on smaller screens */
    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
 
    #role,#card-name{
      text-align: center;
    }




</style>

</body>

</html>