<!-- Page Content -->
<div id="content">

    <!-- Navbar -->
    <nav class="navbar dashboard-navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="navbar-brand header-margin">
                <div id="sidebarCollapse" class="btn d-lg-none d-xl-none">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <?php echo $currentPage ?>

            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <div class="my-2 my-lg-0 mr-5">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Username
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="change-password.php">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a href="../logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
