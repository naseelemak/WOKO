<?php 

require '../config.php';

$currentPage = "Profile";

include 'misc/header.php';

?>


<div class="container lec-profile">

    <div class="row">
        <div class="col-md-6 ml-4">
            <h4 class="mb-4">Personal Details</h4>

            <form>
                <!-- Lecturer Code -->
                <div class="form-group">
                    <label for="inputTP">Login ID</label>
                    <input type="id" class="form-control" id="inputID" value="JTM" disabled>
                </div>


                <!-- Name -->
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" value="Jaedon Tan Yung-Ming" disabled>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="me@jaedon.my" disabled>
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="inputTel">Phone Number</label>
                    <input class="form-control" type="tel" value="0123456789" id="inputTel" disabled>
                </div>
            </form>

            <div class="float-right mb-4">
                <a class="btn btn-primary" href="edit-profile.php" style="padding-left: 30px; padding-right: 30px;">Edit Profile</a>&nbsp;&nbsp;
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>


<?php

include 'misc/footer.php';

?>
