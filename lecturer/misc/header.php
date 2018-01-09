<!doctype html>
<html lang="en">

<head>
    <title>
        <?php echo $currentPage; ?> | WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Icon imports -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Date Range Picker -->
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/moment.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="../assets/js/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/daterangepicker.css" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/cr-1.4.1/fc-3.2.4/fh-3.1.3/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.4/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/cr-1.4.1/fc-3.2.4/fh-3.1.3/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>


    <!-- Visual Editor (WMWYSIWYGEditor) -->
    <link href="../assets/css/wmwysiwygeditor.css" rel="stylesheet">
    <script src="../assets/js/wmwysiwygeditor.min.js"></script>

</head>

<body>

    <?php include 'sidebar.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">

        <!-- header -->
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
