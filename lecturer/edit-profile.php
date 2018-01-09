<?php 

require '../config.php';

$currentPage = "Edit Profile";

include 'misc/header.php';

?>


<div class="container lec-profile">

    <div class="row">
        <div class="col-md-6 ml-4">
            <h4 class="mb-4">Personal Details</h4>

            <form>
                <!-- Lecturer Code -->
                <div class="form-group">
                    <label for="inputTP">Lecturer Code</label>
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
                    <input type="email" class="form-control" id="inputEmail" value="me@jaedon.my">
                </div>

                <!-- Phone Number -->
                <div class="form-group mb-4">
                    <label for="inputTel">Phone Number</label>
                    <input class="form-control" type="tel" value="0123456789" id="inputTel">
                </div>
            </form>

            <div class="float-right mb-4">
                <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
                <a class="btn btn-secondary" href="profile.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>

</div>


<?php

include 'misc/footer.php';

?>
