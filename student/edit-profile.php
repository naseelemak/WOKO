<?php 
    $currentPage = 'Edit Profile';

    
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

<div class="container mt-3">

    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="mb-4">Personal Details</h4>

            <form>
                <!-- TP Number -->
                <div class="form-group">
                    <label for="inputTP">TP Number&nbsp;</label><i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="Please contact site admin to make changes" aria-hidden="true"></i>
                    <input type="id" class="form-control" id="inputTP" value="TP034699" disabled>
                </div>

                <!-- Name -->
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="As per APU registration">
                </div>

                <!-- Course of Study -->
                <div class="form-group">
                    <label for="courseSelect">Course of Study</label>
                    <select class="form-control" id="courseSelect">
                        <option>--Select--</option>
                        <option>Foundation in IT</option>
                        <option>BSc (Hons) in Information Technology</option>
                        <option>BSc (Hons) in Information Technology with specialism in Information System Security</option>
                        <option>BSc (Hons) in Information Technology with specialism in Cloud Computing</option>
                        <option>BSc (Hons) in Software Engineering</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Preferred email address">
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="inputTel">Phone Number</label>
                    <input class="form-control" type="tel" placeholder="0123456789" id="inputTel">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="mb-4">Additional Information</h4>

            <form>
                <!-- Preferred Type of Competition -->
                <div class="form-group">
                    <label for="compTypeSelect">Preferred Type of Competition</label>
                    <select class="form-control" id="courseSelect">
                        <option>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                </div>
                
                <!-- Interests (Tags) -->
                <div class="form-group">
                    <label for="inputInterests">Interests</label>
                    <input type="text" class="form-control" placeholder="Java, PHP, Public Speaking" id="inputInterests">
                </div>

                <!-- Self-Introduction -->
                <div class="form-group">
                    <label for="inputIntroduction">Self-Introduction (Optional)</label>
                    <textarea class="form-control" id="inputIntroduction" placeholder="I excel in programming and in identifying different breeds of cats." rows="5"></textarea>
                </div>
            </form>
        </div>
    </div>


    <div class="float-right mb-4">
        <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
        <a class="btn btn-secondary" href="profile.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
    </div>
</div>

<?php

include '../footer.php';

?>
