<?php
    $currentPage = "Student Details";

    require '../config.php';

    include '../header.php';

    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>


<div class="container mt-2">
    <div class="row px-2">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">TP034699 | Freddy Boy</h4>
                    <p class="card-subtitle mb-2 text-muted">BSc (Hons) in Software Engineering</p>

                    <i class="fa fa-envelope text-info" aria-hidden="true"></i>&nbsp;&nbsp;tp034699@mail.apu.edu.my
                    
                    <br>

                    <i class="fa fa-phone-square mb-5 text-info" aria-hidden="true"></i>&nbsp;&nbsp;+60123456789

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
    </div>
</div>

<?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>
