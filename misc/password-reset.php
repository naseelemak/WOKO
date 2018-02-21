<?php 

    $currentPage = 'Reset Password';
    require '../restrict/restrict.php';
    
    include '../header.php';
    include '../mailer.php';

    if(isset($_SESSION['user'])) 
    {
            if ($_SESSION['role'] == 'student')
            {
                echo "<script>window.location.href='../student/index.php'</script>";
                die;
            }
            else
            {
                echo "<script>window.location.href='../lecturer/comp.php'</script>";
                die;
        }
    }


    if(isset($_GET['id']) && isset($_GET['code']))
    {
        $username = $_GET['id'];
        $token = $_GET['code'];
    }
    else
    {
        echo "<script>window.location.href='../student/index.php'</script>";
        die;
    }

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand mr-5" href="../student/index.php">WOKO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <div class="my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center"><strong>Password Reset</strong></h2>
            <hr>
            <form id="passwordResetForm" method="post" action="password-reset-submit.php?id=<?php echo $username; ?>&code=<?php echo $token; ?>">

                <!-- New Password -->
                <div class="form-group">
                    <input id="newPassword" name="newPassword" type="password" class="form-control mb-4" minlength="6" placeholder="New Password" required>
                </div>

                <!-- New Password Confirmation -->
                <div class="form-group">
                    <input id="newCPassword" name="newCPassword" type="password" class="form-control mb-4" equalto="#newPassword" minlength="6" placeholder="Confirm Password" required>
                </div>

                <!-- Reset Button -->
                <input id="submit" name="submit" type="submit" class="btn btn-primary btn-block mb-2 btnPointer" role="button" value="Reset">
                
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- Javascript Validation -->
<script type="text/javascript">
    $().ready(function() {
        // Validate signup form on keyup and submit
        $("#passwordResetForm").validate();
    });

</script>

