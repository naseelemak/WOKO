<?php 

$currentPage = "Profile";

include 'misc/header.php';

?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">Jaedon Tan Yung-Ming</h1>
    </div>
</div>

<div class="container mt-3">

    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="mb-4">Personal Information</h4>

            <form>
                <!-- TP Number -->
                <div class="form-group">
                    <label for="inputTP">TP Number</label>
                    <input type="id" class="form-control" id="inputTP" value="TP034699" disabled>
                </div>


                <!-- Name -->
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" value="Freddy Boy" disabled>
                </div>

                <!-- Course of Study -->
                <div class="form-group">
                    <label for="courseSelect">Course of Study</label>
                    <input type="text" class="form-control" id="course" value="BSc (Hons) in Software Engineering" disabled>
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
        </div>
        <div class="col-md-6">
            <h4 class="mb-4">Additional Information</h4>

            <form>
                <!-- Preferred Type of Competition -->
                <div class="form-group">
                    <label for="compTypeSelect">Preferred Type of Competition</label>
                    <input type="text" class="form-control" value="Individual" id="inputType" disabled>
                </div>

                <!-- Skills -->
                <div class="form-group">
                    <label for="inputSkills">Skills (Might combine with Interests)</label>
                    <input type="text" class="form-control" value="Java, PHP, Public Speaking" id="inputSkills" disabled>
                </div>

                <!-- Interests -->
                <div class="form-group">
                    <label for="inputInterests">Interests (Might combine with Skills)</label>
                    <input type="text" class="form-control" value="Java, PHP, Public Speaking" id="inputInterests" disabled>
                </div>

                <!-- Self-Introduction -->
                <div class="form-group">
                    <label for="inputIntroduction">Self-Introduction (Optional)</label>
                    <textarea class="form-control" id="inputIntroduction" rows="5" disabled>I excel in programming and in identifying different breeds of cats.</textarea>
                </div>
            </form>
        </div>
    </div>


    <div class="float-right mb-4">
        <a class="btn btn-primary" href="edit-profile.php" style="padding-left: 30px; padding-right: 30px;">Edit Profile</a>&nbsp;&nbsp;
    </div>


</div>



<?php

include 'misc/footer.php';

?>
