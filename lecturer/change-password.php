<?php 

$currentPage = "Competitions";

include 'misc/header.php';

?>


<div class="container">
    <div class="row">
        <div class="col-md-6 ml-4">
            
            <h4 class="mb-4">Change Password</h4>
            <form>
                <!-- Current Password -->
                <label for="inputPassword">Current Password</label>
                <input type="password" class="form-control mb-4" id="inputPassword" placeholder="Password">


                <!-- New Password -->
                <label for="inputPassword">New Password</label>
                <input type="password" class="form-control mb-2" id="inputPassword" placeholder="Password">

                <!-- New Password Confirmation -->
                <label for="inputPassword">Confirm Password</label>
                <input type="password" class="form-control mb-4" id="inputPassword" placeholder="Password">

            </form>

            <div class="float-right mb-4">
                <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
                <a class="btn btn-secondary" href="comp.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>


<?php

include 'misc/footer.php';

?>