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
            window.location.href='student/index.php'
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>

<?php

// If role is not admin, redirect back to previous page
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'student')
{
    echo '<script type="text/javascript">countdown();</script>';

    echo "<p>You don't have the permission to visit this page. Redirecting to lecturer home page in <span id='countdown'>5</span></p>";

    die;
}

?>