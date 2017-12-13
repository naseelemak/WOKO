<!doctype html>
<html lang="en">
    <head>
        <title>WOKO | Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
        <!- Nav bar ->
        <?php include('../constants/navbar.php'); ?>
        <!- Nav bar ends here ->
        
        <br>

    </head>

    <!- Unique code begins here ->

    <body style="background-color: #f5f9fA">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <h2>Login</h2>
                    <br>

                    <h7><strong>Use your TP number:</strong></h7>
                    <br>
                    
                    <!- Create new account ->
                    <small><a href="/registration/registration.php" class="text-muted" role="button">Create an account >></a></small>
                    <br><br>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="tpNumber" aria-describedby="emailHelp" placeholder="TP number">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <br>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                            <p class="text-right"><a href="#">Forgot password</a></p>
                        </div>

                    </form>

                </div>
                <div class="col-md-4"></div>


            </div>

        </div>
    </body>
<!- Unique code ends here ->
    
</html>