<?php 

require 'config.php';

$currentPage = "Restrict Login";


?>

<div class="container mt-3">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title">Account Not Verified</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Please verify your account.</h6>
                    <p class="card-text">You haven't verified your student status at APU. Please check your student email inbox for the confirmation email and follow the confirmation link provided. If you have not received the email, please check your junk or spam folder.</p>
                    
                    <p>No email received? Click <a href="index.php">here</a> to resend confirmation email...</p>
                    
                    Click <a href="index.php">here</a> to return home...
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>


</div>

<!-- Countdown 5 Seconds Javascript -->
<script type="text/javascript">

(function countdown () {
    var timeLeft = 5,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
            window.location.href='../index.php'
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>


<?php

include 'misc/footer.php';

?>

<?php

// If role is not student or if user is not logged in, redirect back to previous page
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'student')
{
    echo '<script type="text/javascript">countdown();</script>';

    echo "<p>You don't have the permission to visit this page. Redirecting to main page in <span id='countdown'>5</span></p>";

    die;
}

?>