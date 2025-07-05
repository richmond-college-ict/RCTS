<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                    <a class="nav-link" href="dashboard.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="nextgen.php?code=none">
                        <div class="sb-nav-link-icon"><i class="bi bi-clipboard-plus-fill"></i></div>
                        NextGen25
                    </a>
                    <a class="nav-link" href="registration.php">
                        <div class="sb-nav-link-icon"><i class="bi bi-clipboard-plus-fill"></i></div>
                        Registrations
                    </a>
                    <a class="nav-link" href="news-list.php?code=none">
                        <div class="sb-nav-link-icon"><i class="bi bi-newspaper"></i></div>
                        News and Updates
                    </a>
                    <a class="nav-link" href="exam-papers.php">
                        <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                        Exam-Papers
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-comments" aria-hidden="true"></i></div>
                        Feedbacks
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="approve-feedbacks.php">Waiting for Approval</a>
                            <a class="nav-link" href="all-feedbacks.php">View All</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-image"></i></div>
                        Banners
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="add-banner.php">Add a Banner</a>
                            <!-- <a class="nav-link" href="all-feedbacks.php">View All</a> -->
                        </nav>
                    </div>

                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="settings.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                        Settings
                    </a>
                    <a class="nav-link" href="change-members.php">
                        <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                        Members
                    </a>
                    <a class="nav-link" href="staff.php">
                        <div class="sb-nav-link-icon"><i class="bi bi-person-lines-fill"></i></div>
                        Staff
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <b>Admin</b>
            </div>
        </nav>
    </div>

    <script>
        $(document).ready(function () {
            $(".getPopup").click(function () {
                Swal.fire({
                    icon: 'info',
                    title: 'Sorry',
                    text: "This feature is currently unavailable!"
                });
            })
        });
    </script>