<?php
$currentPage = "Login";
?>

<?php include('../constants/header.php'); ?>

<!-- Body starts -->

<!-- Nav bar -->
<?php include('../constants/navbar.php'); ?>
<!-- nav bar ends here -->

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