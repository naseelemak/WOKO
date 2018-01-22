<?php 
    require '../restrict/restrict.php';

    $currentPage = 'Profile';

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
        <h1 class="display-5"><?php echo $row['name']; ?></h1>
    </div>
</div>

<div class="container mt-3">

    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="mb-4">Personal Details</h4>

            <form>
                <!-- TP Number -->
                <div class="form-group">
                    <label for="tp">TP Number</label>
                    <input type="text" class="form-control" name="tp" id="tp" value="<?php echo $row['username']; ?>" disabled>
                </div>


                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>" disabled>
                </div>

                <!-- Course of Study -->
                <div class="form-group">
                    <label for="course">Course of Study</label>
                    <input type="text" class="form-control" name="course" id="course" value="<?php echo $row['course_of_study']; ?>" disabled>
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="inputTel">Phone Number</label>
                    <input class="form-control" type="tel" name="phone" id="phone" value="<?php echo $row['phone_no']; ?>" disabled>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="mb-4">Additional Information</h4>

            <form>
                <!-- Preferred Type of Competition -->
                <div class="form-group">
                    <label for="compTypeSelect">Preferred Type of Competition</label>
                    <input type="text" class="form-control" id="compType" name="compType" value="<?php if($row['preferred_comp_type'] == 0)
                            {
                                echo 'Individual';
                            }
                            else
                            {
                                echo 'Team';
                            }?>" disabled>
                </div>
                
                <!-- Interests (Tags) -->
                <div class="form-group">
                    <label for="interests">Interests</label>
                    <input type="text" class="form-control" id="interests" name="interests" value="<?php echo $row['interests']; ?>" disabled>
                </div>

                <!-- Self-Introduction -->
                <div class="form-group">
                    <label for="selfIntro">Self-Introduction (Optional)</label>
                    <textarea class="form-control" id="selfIntro" name="selfIntro" rows="5" disabled><?php if(strcasecmp($row['self_intro'], '') == 0)
                    {
                        echo '--No self-introduction--';
                    }
                    else
                    {
                        echo $row['self_intro'];
                    } ?></textarea>
                </div>
            </form>
        </div>
    </div>


    <div class="float-right mb-4">
        <a class="btn btn-primary" href="edit-profile.php" style="padding-left: 30px; padding-right: 30px;">Edit Profile</a>&nbsp;&nbsp;
    </div>


</div>



<?php
    include '../footer.php';
?>
