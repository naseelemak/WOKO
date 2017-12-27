<!doctype html>
<html lang="en">

<head>
    <title><?php echo $currentPage; ?> | WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Icon imports -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-5" href="index.php">WOKO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Students
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="competitions.php">Competitions</a>
                            <a class="dropdown-item" href="#">User Guide</a>
                        </div>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="login.php">Login / Register</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Username
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="change-password.php">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
