<?php 

$currentPage = "Contact Us";

include 'misc/header.php';

?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5"><?php echo $currentPage; ?></h1>
    </div>
</div>

<div class="container mt-3 mb-5">
    <h6 class="mb-4">Want to promote a competition to APU? Get in touch with us here.</h6>

    <form>
        <div class="form-group">
            <label for="contactNameInput">Your Name / Organisation</label>
            <input type="text" class="form-control" id="contactNameInput" placeholder="John Smith">
        </div>
        <div class="form-group">
            <label for="contactEmailInput">Email address</label>
            <input type="email" class="form-control" id="contactEmailInput" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="contactCategorySelect">Category</label>
            <select class="form-control" id="contactCategorySelect">
        <option>--Select--</option>
        <option>Competition Promotion</option>
        <option>General Query</option>
        <option>Other</option>
    </select>
        </div>
        <div class="form-group">
            <label for="contactMessageInput">Your Message</label>
            <textarea class="form-control" id="contactMessageInput" rows="7" placeholder="We're organising a hackathon in February and would like to invite the students of APU to participate in it. You can read more about the event here – https://www.hackyhacky2018.com. We look forward to your involvement!"></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
    </form>
</div>



<?php

include 'misc/footer.php';

?>
