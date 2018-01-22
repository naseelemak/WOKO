<?php 
    $currentPage = 'Change Password';

    
    require '../restrict/restrict.php';

    include '../header.php';
    
    include 'misc/navbar.php';
?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">
            <?php echo $currentPage ?>
        </h1>
    </div>
</div>

<div class="container mt-5 mb-1">
    <div class="row">
        <div class="col-md-6">
            <form method="post" id="changePasswordForm" action="change-password.php">
                <input id="username" name="username" type="hidden" value="<?php echo $_SESSION['user'] ?>">
                <div class="form-group">
                    <!-- Current Password -->
                    <label for="inputPassword">Current Password</label>
                    <input type="password" class="form-control mb-4" id="oldPassword" name="oldPassword" required>
                </div>

                <div class="form-group">
                    <!-- New Password -->
                    <label for="inputPassword">New Password</label>
                    <input type="password" class="form-control mb-4" id="newPassword" name="newPassword" minlength="6" required>
                </div>

                <div class="form-group">
                    <!-- New Password Confirmation -->
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" class="form-control mb-4" id="newCPassword" name="newCPassword" equalto="#newPassword" minlength="6" required>
                </div>
                
                <div class="float-right mb-4">
                <button type="submit" id="changePasswordSubmit" name="changePasswordSubmit" class="btn btn-primary mr-1" role="button">Submit</button>
                <a class="btn btn-secondary" href="index.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
            </div>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>

<script type="text/javascript">
        $().ready(function() {
            // Validate signup form on keyup and submit
            $("#changePasswordForm").validate({
            });
        });

</script>


<?php
    include '../footer.php';
?>


<?php

    // Login
	if(isset($_POST['changePasswordSubmit'])) 
    {        
        if (!empty($_POST['oldPassword']) && !empty($_POST['newPassword']) && !empty($_POST['newCPassword']))
        {            
        
            $username = test_input($_POST['username']);
            $oldPassword = test_input($_POST['oldPassword']);
            $newPassword = test_input($_POST['newPassword']);
            $newCPassword = test_input($_POST['newCPassword']);

            // Checks first if user already exists
            $stmt = $conn->prepare('SELECT `password` FROM `students` WHERE `password` = ?');

            $stmt->bind_param('s', $oldPassword);

            // execute query
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // If user already exists in database
            if ($result->num_rows < 0)
            {                
                echo "<script>alert('Please enter correct existing password!');";
                echo "document.getElementById('oldPassword').focus();</script>";
                return false;
            }

            if ($newPassword == $newCPassword)
            {                
                // Check connection
                if (!$conn)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Update password of Student table
                $stmt = $conn->prepare('UPDATE `students` SET `password`= ? WHERE `username` = ?');

                $stmt->bind_param('ss', $newPassword, $username);

                // execute query
                $stmt->execute();

                echo "<script>alert('Password changed successful. Please login with new credentials!'); window.location.replace('../logout.php');</script>";
            }
            else 
            {
                echo "<script>alert('New Passwords do not match. Please try again.');";
                echo "document.getElementById('newCPassword').val(''); document.getElementById('newCPassword').focus();</script>";
            }

        }
        else
        {
            echo "<script>alert('Please fill in all empty fields.');</script>";
        }
        

    }

    // Cleans input
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>