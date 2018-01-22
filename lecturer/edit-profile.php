<?php
    require '../restrict/restrict.php';

    $currentPage = "Edit Profile";

    $stmt = $conn->prepare('SELECT * FROM `lecturers` WHERE `username` = ?');
    $stmt->bind_param('s', $_SESSION['user']);

    // execute query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    include '../header.php';
    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>

<div class="container lec-profile">

    <div class="row px-2">
        <div class="col-md-6">
            <h4 class="mb-4">Personal Details</h4>

            <form id="profileEditForm" method="post" action="edit-profile-submit.php">
                
                <input type="hidden" name="usernameh" id="usernameh" value="<?php echo $row['username']; ?>">
                    
                <!-- Lecturer Code -->
                <div class="form-group">
                    <label for="inputTP">Lecturer Code</label>
                    <input type="id" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>" disabled>
                </div>

                <!-- Name -->
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>" disabled>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" required>
                </div>

                <!-- Phone Number -->
                <div class="form-group mb-4">
                    <label for="inputTel">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $row['phone_no']; ?>" required>
                </div>
                
                <div class="float-right mb-4">
                <button type="submit" name="profileEditSubmit" id="profileEditSubmit" class="btn btn-primary mr-1" role="button">Submit</button>
                <a class="btn btn-secondary" href="profile.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
                </div>
            </form>            
        </div>
        <div class="col-md-6"></div>
    </div>

</div>

<?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

 <!-- Javascript Validation -->
    <script type="text/javascript">
        $().ready(function() {
            $.validator.addMethod('phone', function(value) {
                return /^[0-9]{10,12}$/.test(value);
            }, 'Please enter a valid phone number.');

            // Validate signup form on keyup and submit
            $("#profileEditForm").validate({
                rules: {
                    phone: "required phone",
                },
            });
        });

    </script>