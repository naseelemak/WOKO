<!doctype html>
<html lang="en">

<head>
    <title>Login | WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

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

                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-3">
        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2 class="text-center"><strong>Login</strong></h2>
                <hr>
                <form>

                    <!-- TP Number -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="tpNumber" aria-describedby="emailHelp" placeholder="TP number">
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn btn-primary btn-block mb-2">Log In</button>

                    <!-- Remember Me Checkbox -->
                    <div class="form-check">
                        <p><label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                    </label>
                            <a href="#" class="float-right password-forgot" href="#">Forgot password?</a></p>
                    </div>

                </form>

                <!- Create new account ->
                <a href="register.php" class="register-btn" role="button">Create account</a>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php 
    
include 'misc/footer.php';
    
?>
