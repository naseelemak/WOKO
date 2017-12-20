<!doctype html>
<html lang="en">

<head>
    <title>WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <div class="container mt-5">
        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="index.php" class="text-center">
                    <h2><strong>WOKO</strong></h2>
                </a>
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
                            <a href="#" class="float-right" href="#">Forgot password?</a></p>
                    </div>

                </form>

                <!- Create new account ->
                <small class="text-muted">Haven't created an account?</small>
                <br> 
                <small><a href="registration.php" class="text-muted" role="button">Register here >></a></small>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
