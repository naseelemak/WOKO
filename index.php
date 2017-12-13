<?php
$currentPage = "Home";
?>

<?php include('constants/header.php'); ?>

<!-- Body starts -->

<!-- Nav bar -->
<?php include('constants/navbar.php'); ?>
<!-- nav bar ends here -->

<div class="container text-center">
    <div class="row">

        <div class="col-12">

            <h1>Collaborate and Compete</h1>
            <h4>Put what you know to the test. Join a competition today.</h4>

            <br>

            Login to begin, or register first if you haven't already.

            <br><br>

            <!-- Login and Register buttons -->
            <!-- Login modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Login</button>

            <!-- Login page -->
            <a class="btn btn-primary btn-lg" href="login/login.php" role="button">Login v2</a>

            <a class="btn btn-primary btn-lg" href="registration/registration.php" role="button">Register</a>



            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h7><strong>Use your TP number:</strong></h7>
                            <br>
                            <small><a href="#" class="text-muted" role="button">Create an account >></a></small>
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
                                    <a href="#" class="text-right">Forgot password</a>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
</body>

<!-- Unique code ends here -->

<footer>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</footer>


</html>