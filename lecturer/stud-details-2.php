<?php 

require '../config.php';

$currentPage = "Student Details";

include 'misc/header.php';

?>


<div class="container mt-2">
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
        <div class="form-group mb-4">
            <label for="inputTel">Phone Number</label>
            <input class="form-control" type="tel" value="0123456789" id="inputTel" disabled>
        </div>

        <h4 class="mb-4">Additional Information</h4>

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
            <label for="inputIntroduction">Self-Introduction (Optional)</label>
            <textarea class="form-control" id="inputIntroduction" rows="5" disabled>I excel in programming and in identifying different breeds of cats.</textarea>
        </div>
    </form>
</div>

<?php

include 'misc/footer.php';

?>
