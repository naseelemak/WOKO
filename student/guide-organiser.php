<?php 
    $currentPage = 'Organiser Guide';

    require '../config.php';

    include '../header.php';
    
    include 'misc/navbar.php';
?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">
            <?php echo $currentPage; ?>
        </h1>
    </div>
</div>

<div class="container mt-3">

    <h4 class="mb-4">Getting your competition featured on WOKO:</h4>
    <hr>
    <br>
    <div class="row text-center">
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f6a5c0/ffffff?text=1" class="guide-steps">
            <h4>Step 1</h4>
            <p class="text-muted">Go to the 'Contact' page.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f48eb1/ffffff?text=2" class="guide-steps">
            <h4>Step 2</h4>
            <p class="text-muted">Enter your personal or organisation details and select the category "Competition Invite".</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/f178a1/ffffff?text=3" class="guide-steps">
            <h4>Step 3</h4>
            <p class="text-muted">Enter a message describing the competition with a link to its official details if there is one.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
            <img src="http://placehold.it/300x300/ef6191/ffffff?text=4" class="guide-steps">
            <h4>Step 4</h4>
            <p class="text-muted">Click submit and wait for our response.</p>
        </div>
    </div>

<?php
    include '../footer.php';
?>
