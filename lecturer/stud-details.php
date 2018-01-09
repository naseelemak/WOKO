<?php 

require '../config.php';

$currentPage = "Student Details";

include 'misc/header.php';

?>


<div class="container mt-2">
    <div class="card mb-4">
        <div class="card-body">

            <h4 class="card-title">TP034699 | Freddy Boy</h4>
            <h5 class="card-subtitle mb-4 text-muted">BSc (Hons) in Software Engineering</h5>

                <h6 class="card-subtitle mb-2 text-muted">Contact Details</h6>

                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;tp034699@mail.apu.edu.my

                <br>

                <i class="fa fa-phone-square mb-5" aria-hidden="true"></i>&nbsp;&nbsp;+60123456789

                <br>

                <h6 class="card-subtitle mb-2 text-muted">Additional Information</h6>

                <form>
                    <!-- Preferred Type of Competition -->
                    <div class="form-group">
                        <label for="compTypeSelect">Preferred Type of Competition</label>
                        <input type="text" class="form-control" value="Individual" id="inputType" disabled>
                    </div>

                    <!-- Interests (Tags) -->
                    <div class="form-group">
                        <label for="inputInterests">Interests</label>
                        <input type="text" class="form-control" value="Java, PHP, Public Speaking" id="inputInterests" disabled>
                    </div>

                    <!-- Self-Introduction -->
                    <div class="form-group">
                        <label for="inputIntroduction">Self-Introduction</label>
                        <textarea class="form-control" id="inputIntroduction" rows="5" disabled>I excel in programming and in identifying different breeds of cats.</textarea>
                    </div>
                </form>
        </div>
    </div>
</div>

<?php

include 'misc/footer.php';

?>
