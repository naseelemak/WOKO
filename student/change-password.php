<?php 
    $currentPage = 'Change Password';

    require '../config.php';
    require '../restrict/restrict-stu.php';
    require '../restrict/restrict-login.php';

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
            <form>
                <!-- Current Password -->
                <label for="inputPassword">Current Password</label>
                <input type="password" class="form-control mb-4" id="inputPassword" placeholder="Password">


                <!-- New Password -->
                <label for="inputPassword">New Password</label>
                <input type="password" class="form-control mb-4" id="inputPassword" placeholder="Password">

                <!-- New Password Confirmation -->
                <label for="inputPassword">Confirm Password</label>
                <input type="password" class="form-control mb-4" id="inputPassword" placeholder="Password">

            </form>

            <div class="float-right mb-4">
                <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
                <a class="btn btn-secondary" href="index.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>



<?php
    include '../footer.php';
?>