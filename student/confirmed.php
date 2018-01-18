<?php 
    $currentPage = 'Account Verified';

    require '../config.php';
    require '../restrict/restrict.php';

    include '../header.php';
    
    include 'misc/navbar.php';
?>

<div class="container mt-3">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title">Account Verified</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Your account has been verified!</h6>
                    <p class="card-text">Click <a href="../login.php">here</a> to login...</p>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>


</div>


<?php

include '../footer.php';

?>
