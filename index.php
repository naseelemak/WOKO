<?php 

$currentPage = "Home";

include 'misc/header.php';

?>

<div class="homepage text-white mb-4">
    <div class="container homepage-head">
        <h1 class="homepage-title">Collaborate and Compete</h1>
        <h5 class="homepage-subtitle">Put what you know to the test. Join a competition today.</h5>

        <p>Login to begin, or register first if you haven't.</p>

        <div class="homepage-btn-area">
            <!-- Login Button -->
            <a class="btn btn-primary btn-lg homepage-btn" href="login.php" role="button">Login</a>

            <span class="homepage-or">or</span>

            <!-- Register Button -->
            <a class="btn btn-lg homepage-btn" href="register.php" role="button">Register</a>

            <br><br>
        </div>
    </div>
</div>

<?php

include 'misc/footer.php';

?>
