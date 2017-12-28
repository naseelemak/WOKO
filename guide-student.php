<?php 

$currentPage = "Student Guide";

include 'misc/header.php';

?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">
            <?php echo $currentPage; ?>
        </h1>
    </div>
</div>

<div class="container mt-3">

    <h4>Getting started with WOKO:</h4>
    <hr>
    <div class="row text-center">
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f6a5c0/ffffff?text=1" class="guide-steps">
            <h4>Step 1</h4>
            <p class="text-muted">Select Login/Register on the top right corner.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f48eb1/ffffff?text=2" class="guide-steps">
            <h4>Step 2</h4>
            <p class="text-muted">Select 'Create Account'.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f178a1/ffffff?text=3" class="guide-steps">
            <h4>Step 3</h4>
            <p class="text-muted">Enter your details and click submit.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/ef6191/ffffff?text=4" class="guide-steps">
            <h4>Step 4</h4>
            <p class="text-muted">Verify your email address with the confirmation link sent to you.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/ed4a82/ffffff?text=5" class="guide-steps">
            <h4>Step 5</h4>
            <p class="text-muted">Login to WOKO with your registered credentials.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/eb3472/ffffff?text=6" class="guide-steps">
            <h4>Step 6</h4>
            <p class="text-muted">Find and j    oin a competition!</p>
        </div>
    </div>


    <?php

include 'misc/footer.php';

?>
