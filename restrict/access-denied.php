<?php
    
    $currentPage = 'Access Denied';
    
    include '../config.php';
    include '../header.php';

// If student visit lecturer page redirect back to previous page

if ($_SESSION['restrict'] == null)
{
    header("location: ../student/index.php"); 
}

if ($_SESSION['restrict'] == 'notLecturer-guest')
{
    echo '<div class="container mt-3">';
        echo '<div class="row mt-5">';
            echo '<div class="col-md-2"></div>';
            echo '<div class="col-md-8">';
                echo '<div class="card" style="width: 100%;">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title">Hold Up!</h4>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">You do not have permission to view this page.</h6>';
                        echo '<p class="card-text">Please <a href="../misc/login.php">sign in</a> to a lecturer account first.</p>';

                        echo '<p>Just looking around? Click <a href="../student/index.php">here</a> to return home.</p>';
                    
                        echo '<p>Redirecting to login page in <span id="countdown">7</span> seconds...</p>';
    
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2"></div>';
        echo '</div>';
    echo '</div>';
    
    echo'<!-- Countdown 10 Seconds Javascript -->
        <script type="text/javascript">

        (function countdown () {
            var timeLeft = 7,
                cinterval;

            var timeDec = function (){
                timeLeft--;
                document.getElementById("countdown").innerHTML = timeLeft;
                if(timeLeft === 0){
                    clearInterval(cinterval); window.location.replace("../misc/login.php");
                }
            };

            cinterval = setInterval(timeDec, 1000);
        })();

        </script>';
    
    die;
}

if ($_SESSION['restrict'] == 'notLecturer-student')
{
    echo '<div class="container mt-3">';
        echo '<div class="row mt-5">';
            echo '<div class="col-md-2"></div>';
            echo '<div class="col-md-8">';
                echo '<div class="card" style="width: 100%;">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title">Hold Up!</h4>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">You do not have permission to view this page.</h6>';
                        echo '<p class="card-text">Please <a href="../logout.php">logout</a> and sign in to a lecturer account first.</p>';

                        echo '<p>Just looking around? Click <a href="../student/index.php">here</a> to return home now.</p>';
                    
                        echo '<p>Redirecting in <span id="countdown">7</span> seconds...</p>';
    
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2"></div>';
        echo '</div>';
    echo '</div>';
    
    echo'<!-- Countdown 10 Seconds Javascript -->
        <script type="text/javascript">

        (function countdown () {
            var timeLeft = 7,
                cinterval;

            var timeDec = function (){
                timeLeft--;
                document.getElementById("countdown").innerHTML = timeLeft;
                if(timeLeft === 0){
                    clearInterval(cinterval); window.location.replace("../student/index.php");
                }
            };

            cinterval = setInterval(timeDec, 1000);
        })();

        </script>';
    
    die;
}


if ($_SESSION['restrict'] == 'notStudent-guest')
{
    echo '<div class="container mt-3">';
        echo '<div class="row mt-5">';
            echo '<div class="col-md-2"></div>';
            echo '<div class="col-md-8">';
                echo '<div class="card" style="width: 100%;">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title">Hello guest!</h4>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">You do not have permission to view this page</h6>';
                        echo '<p class="card-text">To view this page, please <a href="../misc/login.php">login</a> to a student account or <a href="../misc/register.php">register</a> if you haven\'t yet.</p>';

                        echo '<p>Just looking around? Click <a href="../student/index.php">here</a> to return home.</p>';
                    
                        echo '<p>Redirecting to previous <a href="javascript:history.back()">page</a> in <span id="countdown">7</span> seconds...</p>';
    
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2"></div>';
        echo '</div>';
    echo '</div>';
    
    echo'<!-- Countdown 10 Seconds Javascript -->
        <script type="text/javascript">

        (function countdown () {
            var timeLeft = 7,
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

if ($_SESSION['restrict'] == 'notStudent-guest-2')
{
    echo '<div class="container mt-3">';
        echo '<div class="row mt-5">';
            echo '<div class="col-md-2"></div>';
            echo '<div class="col-md-8">';
                echo '<div class="card" style="width: 100%;">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title">Hello guest!</h4>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">You do not have permission to view this page</h6>';
                        echo '<p class="card-text">To view this page, please <a href="../misc/login.php">login</a> to a student account or <a href="../misc/register.php">register</a> if you haven\'t yet.</p>';

                        echo '<p>Just looking around? Click <a href="../student/index.php">here</a> to return home.</p>';
                    
                        echo '<p>Redirecting to login page in <span id="countdown">7</span> seconds...</p>';
    
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="col-md-2"></div>';
        echo '</div>';
    echo '</div>';
    
    echo'<!-- Countdown 10 Seconds Javascript -->
        <script type="text/javascript">

        (function countdown () {
            var timeLeft = 7,
                cinterval;

            var timeDec = function (){
                timeLeft--;
                document.getElementById("countdown").innerHTML = timeLeft;
                if(timeLeft === 0){
                    clearInterval(cinterval); window.location.replace("../misc/login.php");
                }
            };

            cinterval = setInterval(timeDec, 1000);
        })();

        </script>';
    
    die;
}


include '../footer.php';

?>

    
