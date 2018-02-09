<?php 

    $currentPage = 'Login';
    require '../config.php';
    
    include '../header.php';

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
            <h2 class="text-center"><strong>Login</strong></h2>
            <hr>
            <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <!-- TP Number -->
                <div class="form-group">
                    <input id="loginID" name="loginID" type="text" class="form-control" placeholder="TP Number / Lecturer Code">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input id="loginPass" name="loginPass" type="password" class="form-control" placeholder="Password">
                </div>

                <!-- Login Button -->
                <input name="loginSubmit" type="submit" class="btn btn-primary btn-block mb-2 btnPointer" value="Login">

                <!-- Remember Me Checkbox and Forgot Password -->
                <div class="form-check">
                    <p>
<!--
                        <label class="form-check-label">
                        <input id="loginRemember" name="loginRemember" type="checkbox" class="form-check-input">
                        Remember me
                        </label>
-->
                        <a href="password-forgot.php" class="float-right password-forgot" href="#">Forgot password?</a>
                    </p>
                </div>

            </form>

            <!-- Create new account -->
            <a href="register.php" class="register-btn" role="button">Create account</a>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php

    include '../footer.php';

?>

    <?php
	
    // Login
	if(isset($_POST['loginSubmit'])) 
    {		
        if (!empty($_POST['loginID']) && !empty($_POST['loginPass']))
        {            
            $username = test_input($_POST['loginID']);
            $username = strtoupper($username);
            $password = test_input($_POST['loginPass']);
                        
            // Checks student table first
            $stmt = $conn->prepare('SELECT * FROM `students` WHERE `username` = ?');
            $role = "student";
            
            $stmt->bind_param('s', $username);

            // execute query
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
                
            
            // Checks the lecture table if not found in student table
            if ($result->num_rows != 1)
            {
                $stmt = $conn->prepare('SELECT * FROM `lecturers` WHERE `username` = ?');
                $role = "lecturer";
                
                $stmt->bind_param('s', $username);
                
                // execute query
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
            }
            
            // If no results are found in any table or if passwords do not match
            if ($result->num_rows != 1 || !password_verify($password, $row['password']))
            {
                echo "<script>alert('Wrong username / password. Please try again.');";
                echo "window.location.replace('login.php');</script>";
                return false;
            }
            
            // If result found is an unconfirmed user
            if ($row["status"] != 1)
            {
                $id = base64_encode($username);
                
                echo "<script>window.location.replace('../student/unconfirmed.php?id=". $id ."');</script>";
                return false;
            }
            
            // Sets the role and status to session - this is needed to restrict access to certain pages
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $role;
            $_SESSION['status'] = $row["status"]; 
            
            if(!empty($_POST['loginRemember'])) {
                echo "<script>alert('Setting cookies!');</script>";
				setcookie ('username',$_POST['username'],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ('password',$_POST['password'],time()+ (10 * 365 * 24 * 60 * 60));
			}

            echo "<script>alert('Login successful!');";

            if ($_SESSION['role'] == 'student')
            {
                echo "window.location.replace('../student/index.php');</script>";
            }
            else
            {
                echo "window.location.replace('../lecturer/comp.php');</script>";
            }
        }
        else
        {
            echo "<script>alert('Please fill in all empty fields.');";
            echo "window.location.replace('login.php');</script>";
        }
	}	

?>
