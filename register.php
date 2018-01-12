<?php

$currentPage = 'Register';

require 'config.php';

if(isset($_SESSION['user'])) {
    if ($_SESSION['role'] == 'student')
    {
        echo "<script>window.location.href='student/index.php'</script>";
        die;
    }
    else
    {
        echo "<script>window.location.href='lecturer/comp.php'</script>";
        die;
    }
}

?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Register | WOKO</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="assets/css/normalize.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!-- Own CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand mr-5" href="student/index.php">WOKO</a>
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

                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container mt-5 mb-4">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="text-center"><strong>Register</strong></h2>
                    <hr>
                    <form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-row">

                            <!-- TP Number -->
                            <div class="form-group col-md-12">
                                <label for="regID">TP Number</label>
                                <input type="text" name="regID" class="form-control" id="regID" placeholder="TPxxxxxx" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group col-md-6">
                                <label for="regPass">Password</label>
                                <input type="password" name="regPass" class="form-control" id="regPass" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regCPass">Confirm Password</label>
                                <input type="password" name="regCPass" class="form-control" id="regCPass" equalto="#regPass" placeholder="Password" required>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <label for="regName">Name</label>
                            <input type="text" name="regName" class="form-control" id="regName" placeholder="As per APU registration" required>
                        </div>

                        <!-- Course of Study -->
                        <div class="form-group">
                            <label for="regCourse">Course of Study</label>
                            <select class="form-control" type="text" name="regCourse" id="regCourse" required>
<option selected disabled>--Select--</option>
                        <option>Foundation in IT</option>
                        <option>BSc (Hons) in Information Technology</option>
                        <option>BSc (Hons) in Information Technology with specialism in Information System Security</option>
                        <option>BSc (Hons) in Information Technology with specialism in Cloud Computing</option>
                        <option>BSc (Hons) in Software Engineering</option>
                    </select>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="regPhone">Phone Number</label>
                            <input name="regPhone" class="form-control" type="tel" placeholder="0123456789" id="regPhone" required>
                        </div>

                        <!-- Preferred Type of Competition -->
                        <div class="form-group">
                            <label for="regCompType">Preferred Type of Competition</label>
                            <select name="regCompType" type="text" class="form-control" id="regCompType" required>
                        <option selected disabled>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                        </div>

                        <!-- Interests (Tags) -->
                        <div class="form-group">
                            <label for="regInterests">Interests</label>
                            <input name="regInterests" type="text" class="form-control" placeholder="Java, PHP, Public Speaking" id="regInterests" required>
                        </div>

                        <!-- Self-Introduction -->
                        <div class="form-group">
                            <label for="regIntro">Self-Introduction (Optional)</label>
                            <textarea name="regIntro" class="form-control" type="text" id="regIntro" placeholder="I excel in programming and in identifying different breeds of cats." rows="5"></textarea>
                        </div>

                        <div class="float-right mt-2">
                            <button type="submit" name="regSubmit" id="regSubmit" class="btn btn-primary mr-1">Submit</button>
                            <a class="btn btn-secondary" href="login.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
        <script>
        
            $("#regForm").validate();

        </script>
        
    </body>

    </html>


    <?php

    // Define error variables and set to empty values
    $usernameErr = $passwordErr = $cpasswordErr = $nameErr = $courseErr = $phoneErr = "";

    // Login
	if(isset($_POST['regSubmit'])) 
    {        
        if (!empty($_POST['regID']) && !empty($_POST['regPass']) && !empty($_POST['regCPass']) && !empty($_POST['regName']) && !empty($_POST['regCourse']) && !empty($_POST['regPhone']) && !empty($_POST['regCompType']) && !empty($_POST['regInterests']))
        {            
        
            $username = test_input($_POST['regID']);
            if (!preg_match("/[Tt]{1}[Pp]{1}[0-9]{6}\b/", $username)) 
            {
                echo "<script>alert('Please enter your student ID in the required format. (E.g. TP034567)');";
                echo "document.getElementById('regID').focus();</script>";
                return false;
            }
            
            $username = strtoupper($username);
            $password = test_input($_POST['regPass']);
            $cpassword = test_input($_POST['regCPass']);
            $name = test_input($_POST['regName']);
            $course = test_input($_POST['regCourse']);
            
            $phone = test_input($_POST['regPhone']);
            if (!preg_match("/^[0-9]{10,12}$/", $phone)) 
            {
                echo "<script>alert('Please only enter numbers in the phone number field 10 to 12 digits long. (E.g. 0123456789)');";
                echo "document.getElementById('regPhone').focus();</script>";
                return false;
            }
            
            $intro = test_input($_POST['regIntro']);
            $email = test_input($_POST['regID'] . "@mail.apu.edu.my");

            if ($_POST['regCompType'] == "Individual")
            {
                $compType = 0;
            }
            else
            {
                $compType = 1;
            }

            $interests = $_POST['regInterests'];
            $intro = $_POST['regIntro'];


            // Checks first if user already exists
            $stmt = $conn->prepare('SELECT username FROM students WHERE username = ?');

            $stmt->bind_param('s', $username);

            // execute query
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // If user already exists in database
            if ($result->num_rows > 0)
            {                
                echo "<script>alert('Username already exists! Please enter an another username.');";
                echo "document.getElementById('regID').focus();</script>";
                return false;

            }

            if ($password == $cpassword)
            {                
                // Check connection
                if (!$conn)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Inserts details into the Student table
                $stmt = $conn->prepare('INSERT INTO `students`(`username`, `password`, `name`, `course_of_study`, `phone_no`, `preferred_comp_type`, `interests`, `self_intro`, `email`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

                $stmt->bind_param('sssssisss', $username, $password, $name, $course, $phone, $compType, $interests, $intro, $email);

                // execute query
                $stmt->execute();

                echo "<script>alert('Registration successful!'); window.location.replace('student/confirmation.php');</script>";
            }
            else 
            {
                echo "<script>alert('Passwords do not match. Please try again.');";
                echo "document.getElementById('regCPass').val(''); document.getElementById('regCPass').focus();</script>";
            }

        }
        else
        {
            echo "<script>alert('Please fill in all empty fields.');</script>";
        }
	}	


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 

?>
