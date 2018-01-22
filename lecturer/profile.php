<?php
    require '../restrict/restrict.php';

    $currentPage = "Profile";

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


<div class="container">
    <div class="row px-2">
        <div class="col-md-6">
            <h4 class="mb-4">Personal Details</h4>

            <form>
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
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" disabled>
                </div>

                <!-- Phone Number -->
                <div class="form-group mb-4">
                    <label for="inputTel">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $row['phone_no']; ?>" disabled>
                </div>
            </form>

            <div class="float-right mb-4">
                <a class="btn btn-primary" href="edit-profile.php" style="padding-left: 30px; padding-right: 30px;">Edit Profile</a>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>


<?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>
