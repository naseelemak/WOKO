<!doctype html>
<html lang="en">

<head>
    <title>Access Denied | WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <!-- Own CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>

<?php

// If role is not student or if user is not logged in, redirect back to previous page
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'student')
{
    echo '<div class="container mt-3">';
        echo '<div class="row mt-5">';
            echo '<div class="col-md-2"></div>';
            echo '<div class="col-md-8">';
                echo '<div class="card" style="width: 100%;">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title">Hold Up!</h4>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">You do not have permission to view this page.</h6>';
                        echo '<p class="card-text">Please <a href="../misc/login.php">login</a> first to your student account. If you have not registered, click <a href="../misc/register.php">here</a> to do so.</p>';

                        echo '<p>Just looking around? Click <a href="../student/index.php">here</a> to return home.</p>';
                    
                        echo '<p>Redirecting to previous page in <span id="countdown">10</span> seconds.</p>';
    
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2"></div>';
        echo '</div>';
    echo '</div>';
    
    echo'<!-- Countdown 10 Seconds Javascript -->
        <script type="text/javascript">

        (function countdown () {
            var timeLeft = 10,
                cinterval;

            var timeDec = function (){
                timeLeft--;
                document.getElementById("countdown").innerHTML = timeLeft;
                if(timeLeft === 0){
                    clearInterval(cinterval);
                    window.history.go(-1);
                }
            };

            cinterval = setInterval(timeDec, 1000);
        })();

        </script>';
    
    die;
}

?>


<?php

include '../footer.php';

?>
