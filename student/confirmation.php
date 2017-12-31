<?php 

$currentPage = "Student Guide";

include 'misc/header.php';

?>

<div class="container mt-3">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title">Email Confirmation</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Your account has been created!</h6>
                    <p class="card-text">You need to confirm your email address before you can it. Please check your email inbox for the confirmation email and follow the confirmation link provided. If you do not receive an email, please check your junk or spam folder.</p>
                    
                    <p>No email received? Click <a href="index.php">here</a> to resend confirmation email...</p>
                    
                    Click <a href="index.php">here</a> to return home...
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>


</div>


<?php

include 'misc/footer.php';

?>