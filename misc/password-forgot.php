<?php 

    $currentPage = 'Forgot Password';
    require '../config.php';
    
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
    
    $msg = NULL;
?>


<?php

	if(isset($_POST['submit'])) 
    {
        if (empty($_POST['email']))
        {
            echo "<script>alert('Please enter an email address.');";
            echo "window.location.replace('password-forgot.php');</script>";
        }
            
        $email = test_input($_POST['email']);

        $stmt = $conn->prepare('SELECT * FROM `students` WHERE `email` = ?');
        $stmt->bind_param('s', $email);

        // execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $table = 'students';

        // Checks the lecture table if not found in student table
        if ($result->num_rows != 1)
        {
            $stmt = $conn->prepare('SELECT * FROM `lecturers` WHERE `email` = ?');

            $stmt->bind_param('s', $email);

            // execute query
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $table = 'lecturers';
        }

        // If no results are found in any table or if passwords do not match
        if ($result->num_rows != 1)
        {
            $msg = "<div class='alert alert-warning' role='alert'>
					No user exists with that email address. Please enter a valid one. 
			  	</div>";
        }
        else
        {
            $id = base64_encode($row['username']);
            $code = md5(uniqid(rand()));

            if($table == 'students')
            {
                $stmt = $conn->prepare("UPDATE `students` SET `token` = ? WHERE `email` = ?");
            }
            else
            {
                $stmt = $conn->prepare("UPDATE `lecturers` SET `token` = ? WHERE `email` = ?");
            }
            
            $stmt->bind_param('ss', $code, $email);
            $stmt->execute();

            sendPasswordReset($row['name'], $email, $id, $code);

            $msg = "<div class='alert alert-success'>
                        We've sent an email to $email.
                        Please click on the password reset link in the email to create a new password. 
                    </div>";
        }        
    }

?>

<script>

    $('.alert').alert();

</script>

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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

<?php
    if(isset($msg))
    {
        echo $msg;
    }
?>

<div class="container mt-3">
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center"><strong>Password Reset</strong></h2>
            <hr>
            <form id="passwordForgotForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <!-- Email Address -->
                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Student Email / Lecturer Email">
                </div>

                <!-- Reset Button -->
                <input name="submit" type="submit" class="btn btn-primary btn-block mb-2 btnPointer" value="Reset">
                
            </form>

            <a href="login.php" class="register-btn" role="button">Cancel</a>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- Javascript Validation -->
<script type="text/javascript">
    $().ready(function() {
        // Validate signup form on keyup and submit
        $("#passwordForgotForm").validate();
    });

</script>

<?php

    include '../footer.php';

?>

