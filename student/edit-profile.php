<?php 
    require '../restrict/restrict.php';

    $currentPage = 'Edit Profile';    

    $stmt = $conn->prepare('SELECT * FROM `students` WHERE `username` = ?');
    $stmt->bind_param('s', $_SESSION['user']);

    // execute query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

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

<div class="container mt-3">
    <form id="profileEditForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="mb-4">Personal Details</h4>
                
                <!-- TP Number -->
                <div class="form-group">
                    <label for="tp">TP Number&nbsp;</label><i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="Please contact site admin to make changes" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="tp" id="tp" value="<?php echo $row['username']; ?>" disabled>
                </div>

                <!-- Name -->
                <div class="form-group">
                    <label for="studentName">Name</label>
                    <input type="text" class="form-control" name="studentName" id="studentName" value="<?php echo $row['name']; ?>" placeholder="As per APU registration">
                </div>

                <!-- Course of Study -->
                <div class="form-group">
                    <label for="course">Course of Study</label>
                    <select class="form-control" id="course" name="course">
                        <option>--Select--</option>
                        <?php             
                        
                            $stmt = $conn->prepare('SELECT * FROM `courses` ORDER BY `course` DESC');

                            // execute query
                            $stmt->execute();

                            // Get the result
                            $result = $stmt->get_result();

                            while ($rowCourses = $result->fetch_assoc())
                            {      
                                if(strcasecmp($row['course_of_study'], $rowCourses['course']) == 0)
                                {
                                    echo '<option selected>'. $rowCourses['course'] .'</option>';
                                }
                                else
                                {
                                    echo '<option>'. $rowCourses['course'] .'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="inputTel">Phone Number</label>
                    <input class="form-control" type="tel" name="phone" id="phone" value="<?php echo $row['phone_no']; ?>" id="inputTel">
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="mb-4">Additional Information</h4>

                <!-- Preferred Type of Competition -->
                <div class="form-group">
                    <label for="compType">Preferred Type of Competition</label>
                    <select class="form-control" id="compType" name="compType">
                        <option>--Select--</option>
                        <?php 
                        
                            if($row['preferred_comp_type'] == 0)
                            {
                                echo '<option selected>Individual</option>';
                                echo '<option>Team</option>';
                            }
                            else
                            {
                                echo '<option>Individual</option>';
                                echo '<option selected>Team</option>';
                            }
                        
                        ?>                        
                    </select>
                </div>

                <!-- Interests (Tags) -->
                <div class="form-group">
                    <label for="interests">Interests</label>
                    <input type="text" class="form-control" id="interests" name="interests" value="<?php echo $row['interests']; ?>" placeholder="Java, PHP, Public Speaking">
                </div>

                <!-- Self-Introduction -->
                <div class="form-group">
                    <label for="selfIntro">Self-Introduction (Optional)</label>
                    <textarea class="form-control" id="selfIntro" name="selfIntro" placeholder="I excel in programming and in identifying different breeds of cats." rows="5"><?php echo $row['self_intro']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="float-right mb-4">
            <button type="submit" id="submit" name="submit" class="btn btn-primary mr-1" role="button">Submit</button>
            <a class="btn btn-secondary" href="profile.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
        </div>

    </form>
</div>

<!-- Javascript Validation -->
<script type="text/javascript">
    $().ready(function() {
        $.validator.addMethod('tp', function(value) {
            return /[Tt]{1}[Pp]{1}[0-9]{6}\b/.test(value);
        }, 'Please enter a valid TP number.');

        $.validator.addMethod('studentName', function(value) {
            return /^[a-zA-Z\- ]+$/.test(value);
        }, 'Please enter only letters and hyphens.');

        $.validator.addMethod('phone', function(value) {
            return /^[0-9]{10,12}$/.test(value);
        }, 'Please enter a valid phone number.');

        // Validate signup form on keyup and submit
        $("#profileEditForm").validate({
            rules: {
                tp: "required tp",
                studentName: "required studentName",
                phone: "required phone",
            },
        });
    });

</script>

<?php

include '../footer.php';

?>


    <?php

	if(isset($_POST['submit'])) 
    {        
        // -- Preliminary validation        
        if (empty($_POST['studentName']))
        {
            echo "<script>alert('Please enter a name.');";
            echo "document.getElementById('studentName').focus();</script>";
            return false;
        }

        if (empty($_POST['course']))
        {
            echo "<script>alert('Please specify your course of study.');";
            echo "document.getElementById('course').focus();</script>";
            return false;
        }

        if (empty($_POST['phone']))
        {
            echo "<script>alert('Please enter a phone number.');";
            echo "document.getElementById('phone').focus();</script>";
            return false;
        }

        if (empty($_POST['compType']))
        {
            echo "<script>alert('Please specify your preferred competition type.');";
            echo "document.getElementById('compType').focus();</script>";
            return false;
        }

        if (empty($_POST['interests']))
        {
            echo "<script>alert('Please specify your interests.');";
            echo "document.getElementById('interests').focus();</script>";
            return false;
        }
        // -- Preliminary validation ends
        
        $username = $_SESSION['user'];
        $name = test_input($_POST['studentName']);
        $course = test_input($_POST['course']);
        $phone = test_input($_POST['phone']);
        if (!preg_match("/^[0-9]{10,12}$/", $phone)) 
        {
            echo "<script>alert('Please only enter numbers in the phone number field 10 to 12 digits long. (E.g. 0123456789)');";
            echo "document.getElementById('regPhone').focus();</script>";
            return false;
        }

        if ($_POST['compType'] == "Individual")
        {
            $compType = 0;
        }
        else
        {
            $compType = 1;
        }

        $interests = test_input($_POST['interests']);
        $intro = test_input($_POST['selfIntro']);
               
        // Check connection
        if (!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Inserts details into the Student table
        $stmt = $conn->prepare('UPDATE `students` SET `name`= ?, `course_of_study`= ?, `phone_no`= ?, `preferred_comp_type`= ?, `interests`= ?, `self_intro`= ? WHERE `username` = ?');

        $stmt->bind_param('sssisss', $name, $course, $phone, $compType, $interests, $intro, $username);

        // execute query
        $stmt->execute();

        echo "<script>alert('Profile updated successfully!'); window.location.replace('../student/profile.php');</script>";

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
