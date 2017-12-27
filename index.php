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

        </div>


        <ul class="homepage-contact-area">
            <li class="homepage-contact-item">
                <hr class="homepage-line">
                <div>
                    <h3 class="homepage-contact-title">&lt; Contact Us ></h3>
                    <p class="homepage-contact-description">Want your competition featured on the website? Have a question to ask? Send us a message.</p>
                </div>
            </li>
            <li class="homepage-contact-item">
                <hr class="homepage-line">
                <div>
                    <h3 class="homepage-contact-title">&lt; About Us ></h3>
                    <p class="homepage-contact-description">What is WOKO? Does it even stand for anything? Read more about the platform over here.</p>
                </div>
            </li>
        </ul>
    </div>

    <?php

include 'misc/footer.php';

?>
